<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::latest()->get();
        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('questions.show', compact('question'));
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
            'question' => 'required|max:255',
            'option_1' => 'required|max:255',
            'option_2' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust the maximum file size and allowed image types as needed
        ]);

        $question = Question::create($request->only('question', 'option_1', 'option_2'));
        // Handle image upload if a new image file is provided
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('public'); // Change the storage path as per your requirement
            // Save the image path to the destination
            $question->image_path = $imagePath;
            $question->save();
        }

        return redirect()->route('questions.index')->with('success', 'Question created successfully.');
    }

    public function create()
    {
        return view('questions.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);
        return view('questions.edit', compact('question'));
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
            'question' => 'required|max:255',
            'option_1' => 'required|max:255',
            'option_2' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust the maximum file size and allowed image types as needed
        ]);
        $question = Question::findOrFail($id);

        $question->update($request->only('question', 'option_1', 'option_2'));

        // Handle image upload if a new image file is provided
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('public'); // Change the storage path as per your requirement
            // Save the image path to the destination
            $question->image_path = $imagePath;
            $question->save();
        }
        return redirect()->route('questions.edit', $question->id)->with('success', 'Destination updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
         // Delete associated venues first
        
        $question->delete();

        return redirect()->route('questions.index')->with('success', 'Question deleted successfully.');
    }
}
