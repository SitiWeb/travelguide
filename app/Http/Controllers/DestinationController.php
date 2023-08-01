<?php

namespace App\Http\Controllers;
use App\Models\Destination;
use App\Models\Type;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::all();
        return view('destinations.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        // Eager load the 'type' relationship
        $destination->load('type');

        // Now you can access the related 'type' data like this:
        $type = $destination->type;
 
        // Alternatively, you can use the $destination variable directly in the view
        return view('destinations.show', compact('destination'));
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
            'city' => 'required|max:255',
            'country' => 'required|max:255',
            'description' => 'required',
            'type_id' => 'required',
        ]);

        Destination::create($request->only('city', 'country', 'description', 'type_id'));

        return redirect()->route('destinations.index')->with('success', 'Question created successfully.');
    }

    public function create()
    {
        $types = Type::all();
        return view('destinations.create',compact('types'));
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
        $destination = Destination::findOrFail($id);
       
        return view('destinations.edit', compact('destination','types'));
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
            'city' => 'required|max:255',
            'country' => 'required|max:255',
            'description' => 'required',
            'type_id' => 'required',
        ]);

        $destination = Destination::findOrFail($id);

        $destination->update($request->only('city', 'country', 'description', 'type_id'));

        return redirect()->route('destinations.show', $destination->id)->with('success', 'Destination updated successfully.');
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
