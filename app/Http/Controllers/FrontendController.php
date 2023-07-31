<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
class FrontendController extends Controller
{
    public function render_question($id = false){
        
        $question = (Question::find($id));
        return view('frontend.prepared', compact('question'));
    }

    public function showQuestion($id = false)
    {
        if (!$id){
            $id = 1;
        }

        // Retrieve the question ID from the session or use the provided ID if not set
        $currentQuestionId = Session::get('current_question_id', $id);
        $question = Question::find($currentQuestionId);

        // Redirect to a "thank you" page if there are no more questions to display
        if (!$question) {
            return view('frontend.end');
        }

        return view('frontend.prepared', compact('question'));
    }

    public function saveResponse(Request $request)
    {
        $answer = $request->input('option');
        $questionId = key($answer);
        
        // Save the response in the session (e.g., using an array)
        $userResponses = Session::get('user_responses', []);
        $userResponses[$questionId] = $answer;
        Session::put('user_responses', $userResponses);
      
        // Update the current question ID in the session for the next iteration
        $nextQuestionId = $questionId + 1;
        Session::put('current_question_id', $nextQuestionId);
        
        // Check if all questions are answered
        $totalQuestions = count(Question::all()); // Assuming you have a Question model
        
        if ($nextQuestionId > $totalQuestions) {
            // // Save the responses in the database
            // foreach ($userResponses as $questionId => $answer) {
            //     $response = new QuestionResponse([
            //         'question_id' => $questionId,
            //         'answer' => $answer,
            //     ]);
            //     $response->save();
            // }

            // // Clear the user responses from the session after saving to the database
            // Session::forget('user_responses');

            // Redirect to the thank you page or any other desired page
            return new JsonResponse([
                'status' => 'success',
                'redirect_url' => route('end'),
                'user_responses' => Session::get('user_responses')
            ]);
        }
        
        // If not all questions are answered, render the "question" view and return the HTML
        $question = Question::find($nextQuestionId);
        if ($question){
            $step = $question->id;
            $option_1 = $question->option_1;
            $option_2 = $question->option_2;
            $question = $question->question;
        }
        
        $questionView = View::make('components.cards', compact('question', 'option_1','option_2','step'));
        $questionHtml = $questionView->render();

        $active = $step;
        $stepView = View::make('components.steps', compact('active'));
        $stepHtml = $stepView->render();
        
         // Return the JSON response with the status and the HTML for the "question" view
         return new JsonResponse([
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
        return redirect()->route('render', 1);
    }
}
