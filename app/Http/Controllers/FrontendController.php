<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Destination;
use App\Models\Answer;
use App\Models\Userresponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
class FrontendController extends Controller
{
    public function render_question($id = false){
        $question = (Question::find($id));
        return view('frontend.prepared', compact('question'));
    }

    public function render_pdf($id){
        $destination = Destination::find($id);
        if ($destination) {
            $venues = [];
            foreach($destination->venues as $venue){
                $venues[$venue->activity_type][] = $venue; 
            }
            $destination->locations = $venues;

            
            $pdf = Pdf::loadView('pdf', compact('destination'))
                ->setPaper([0, 0, 6000, 768], 'landscape');
            
            return $pdf->stream('certificate.pdf');
        } else {
            // Handle the case where the destination with the given ID was not found
            return response('Destination not found', 404);
        }
    }

    public function end($id){
        $response = (Userresponse::find($id));
        if (!$response){
            // Clear user responses and reset current_question_id in the session
            Session::forget('user_responses');
            Session::forget('current_question_id');

            // Redirect back to the first question or any other desired page
            return redirect()->route('questions');
        }
        $destination = Destination::where('id',$response->destination)->first();
        
        return view('frontend.end',  compact('destination'));
        
    }

    public function destination($id){
        $userResponses = Session::get('response_id');
        $userresponse = Userresponse::find($userResponses);
    
        $destination_orig = (Destination::with('venues')->find($id));
        $destinations = (Destination::with('venues')->where('type_id',$destination_orig->type_id)->get());
        
        $new_destinations = [];
        
        foreach($destinations as $destination){
            $venues = [];
            foreach($destination->venues as $venue){
                $venues[$venue->activity_type][] = $venue; 
            }
            $destination->locations = $venues;
            $new_destinations[] = $destination;
        }
        $destinations = $new_destinations;
        shuffle($destinations);
        
         
        return view('frontend.destination',  compact('destinations','userresponse'));
    }

    public function showQuestion($id = false)
    {
        $images = Question::pluck('image_path')->toArray();
        $new_images = [];
        foreach($images as $image){
            $new_images[] = asset('storage/' . $image);
        }
        $images = $new_images;
        if (!$id){
            
            $id = 1;
        }

        // Retrieve the question ID from the session or use the provided ID if not set
        $currentQuestionId = Session::get('current_question_id', $id);
        $question = Question::find($currentQuestionId);

        // Redirect to a "thank you" page if there are no more questions to display
        if (!$question) {
            $user_responses = Session::get('destination_id');
       
            if ($user_responses){
                return redirect()->route('end',['id' => $user_responses]);
            }
            // Clear user responses and reset current_question_id in the session
            Session::forget('user_responses');
            Session::forget('current_question_id');

            return view('frontend.prepared', compact('question'));
        }

        return view('frontend.prepared', compact('question','images'));
    }
    public function updateRating(Request $request)
    {
        $rating = $request->input('rating');
    
        if ($rating < 1 || $rating > 5) {
            return response()->json(['error' => 'Invalid rating value'], 400);
        }
    
        $userResponse = Userresponse::find($request->input('user_response_id'));
        $userResponse->rating = $rating;
        $userResponse->save();
    
        return response()->json(['success' => 'Rating updated successfully']);
    }
    public function saveResponse(Request $request)
    {
        $answer = $request->input('option');
        $questionId = key($answer);

        // Save the response in the session (e.g., using an array)
        $userResponses = Session::get('user_responses');
        $userResponses[$questionId] = $answer[$questionId];
        Session::put('user_responses', $userResponses);
      
        // Update the current question ID in the session for the next iteration
        $nextQuestionId = $questionId + 1;
        Session::put('current_question_id', $nextQuestionId);
        
        // Check if all questions are answered
        $totalQuestions = count(Question::all()); // Assuming you have a Question model
        
        if ($nextQuestionId > $totalQuestions) {
            // Redirect to the thank you page or any other desired page
            $user_responses = Session::get('user_responses');
            $answerModel = new Answer();
            $answer = $answerModel->get_type($user_responses);

            $randomDestination = Destination::where('type_id',  $answer->type->id)->inRandomOrder()->first();
            $reponse = Userresponse::create(
                [
                    'userresponse' => json_encode($user_responses),
                    'ip' => request()->ip(),
                    'submitted_time' => now(), // If you want to set the current timestamp
                    'destination' => $randomDestination->id,
                ]
            );
            Session::put('destination_id',  $randomDestination->id);
            Session::put('response_id',  $reponse->id);

            return new JsonResponse([
                'status' => 'success',
                'answer' => $answer,
                'redirect_url' => route('end',['id' => $reponse->id]),
                'user_responses' => Session::get('user_responses')
            ]);
        }
        
        // If not all questions are answered, render the "question" view and return the HTML
        $question = Question::find($nextQuestionId);
        if ($question){
            $step = $question->id;
            $option_1 = $question->option_1;
            $option_2 = $question->option_2;

            if (isset($question->image_path) && !empty($question->image_path)){
                
                $image = asset('storage/' . $question->image_path);
            }
            else{
                $image=false;
            }

            $question = $question->question;
            
        }
        
        $questionView = View::make('components.cards', compact('question', 'option_1','option_2','step'));
        $questionHtml = $questionView->render();

        $active = $step;
        $stepView = View::make('components.steps', compact('active'));
        $stepHtml = $stepView->render();
        
         // Return the JSON response with the status and the HTML for the "question" view
         return new JsonResponse([
            'image_url' => $image, 
             'status' => 'success',
             'question_html' => $questionHtml,
             'question_id' => $nextQuestionId,
             'steps_html' => $stepHtml,
             'user_responses' => Session::get('user_responses')
         ]);
        // If not all questions are answered, redirect to the next question
        return new JsonResponse(['status' => 'success', 'next_question_url' => $nextQuestionId]);
    }

    public function clearResponses()
    {
        // Clear user responses and reset current_question_id in the session
        Session::forget('user_responses');
        Session::forget('current_question_id');

        // Redirect back to the first question or any other desired page
        return redirect()->route('questions');
    }
}
