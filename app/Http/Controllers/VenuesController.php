<?php

namespace App\Http\Controllers;
use App\Models\Venue;
use App\Models\Destination;
use Illuminate\Http\Request;

class VenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $venues = Venue::with('destination')->get();
        foreach($venues as $venue){
            $locations[$venue->destination->city][$venue->activity_type][] = $venue;
        }
  
        return view('venues.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Venue $venue)
    {
        // Eager load the 'type' relationship
        $venue->load('destination');
        return view('venues.show', compact('venue'));
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
            'title' => 'required|max:255',
            'description' => 'string',
            'address' => 'max:255',
            'url' => 'max:255',
            'price' => 'max:255',
            'activity_type' => 'max:255',
            'destination_id' => 'required|exists:destinations,id', // Validate destination_id and check if it exists in the destinations table
        ]);
    
        // Create the venue with the destination_id included
        Venue::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'address' => $request->input('address'),
            'url' => $request->input('url'),
            'price' => $request->input('price'),
            'activity_type' => $request->input('activity_type'),
            'destination_id' => $request->input('destination_id'),
        ]);

        return redirect()->route('venues.index')->with('success', 'Venue created successfully.');
    }

    public function create()
    {
        $destinations = Destination::all();
        return view('venues.create', compact('destinations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destinations = Destination::all();
        $venue = Venue::with('destination')->findOrFail($id);

        return view('venues.edit', compact('venue', 'destinations'));
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
            'title' => 'required|max:255',
            'description' => 'string',
            'address' => 'max:255',
            'url' => 'max:255',
            'price' => 'max:255',
            'activity_type' => 'max:255',
            'destination_id' => 'required|exists:destinations,id', // Validate destination_id and check if it exists in the destinations table
            
        ]);

        $venue = Venue::findOrFail($id);

        $venue->update($request->only('title', 'description', 'address', 'url', 'price', 'activity_type','destination_id'));

        return redirect()->route('venues.show', $venue->id)->with('success', 'Venue updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venue = Venue::findOrFail($id);
        $venue->delete();

        return redirect()->route('venues.index')->with('success', 'Venue deleted successfully.');
    }
}
