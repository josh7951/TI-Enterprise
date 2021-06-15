<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournaments; 

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments = Tournaments::all();

        return view('admin.tournamentindex', compact('tournaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.tournamentcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'series' => 'required|max:100',
            'tournament' => 'required|max:255',
            'location' => 'required|max:100',
        ]);
        
        $tournamentData = new Tournaments([
            'series' => $request->input('series'),
            'tournament' => $request->input('tournament'),
            'location' => $request->input('location'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ]);
        $tournamentData->save();

        return redirect('/tournament-editor')->with('success', 'Tournament was successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tournament = Tournaments::findOrFail($id);

        return view('admin.tournamentedit', compact('tournament'));
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
        $this->validate($request, [
            'series' => 'required|max:100',
            'tournament' => 'required|max:255',
            'location' => 'required|max:100',
        ]);
        
        $tournamentData = [
            'series' => $request->input('series'),
            'tournament' => $request->input('tournament'),
            'location' => $request->input('location'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ];
        Tournaments::whereId($id)->update($tournamentData);

        return redirect('/tournament-editor')->with('success', 'Tournament was successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tournament = Tournaments::findOrFail($id);
        $tournament->delete();

        return redirect('/tournament-editor')->with('success', 'Tournament was successfully deleted!');
    }
}
