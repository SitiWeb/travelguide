<?php

namespace App\Http\Controllers;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Type;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Answer::all();
        return view('answers.index', compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    { 
        $questions = Question::all();
        return view('answers.show', compact('answer', 'questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_id' => 'required|max:255',
            'question_1' => 'required|max:255',
            'question_2' => 'required',
            'question_3' => 'required',
            'question_4' => 'required',
            'question_5' => 'required',
        ]);

        Answer::create($request->only('type_id', 'question_1', 'question_2', 'question_3', 'question_4', 'question_5'));

        return redirect()->route('answers.index')->with('success', 'Question created successfully.');
    }

    public function create()
    {
        $questions = Question::all();
        $types = Type::all();
        return view('answers.create', compact('questions','types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = Type::all();
        $answer = Answer::findOrFail($id);
        $questions = Question::all();
        return view('answers.edit', compact('answer','types','questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'type_id' => 'required|max:255',
            'question_1' => 'required|max:255',
            'question_2' => 'required',
            'question_3' => 'required',
            'question_4' => 'required',
            'question_5' => 'required',
        ]);

        $answer = Answer::findOrFail($id);

        $answer->update($request->only('type_id', 'question_1', 'question_2', 'question_3', 'question_4', 'question_5'));

        return redirect()->route('answers.show', $answer->id)->with('success', 'Answer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        $destination->delete();

        return redirect()->route('destinations.index')->with('success', 'Destination deleted successfully.');
    }
}
