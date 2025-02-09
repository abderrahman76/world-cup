<?php

namespace App\Http\Controllers;

use App\Models\coach;
use App\Models\matchs;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matchs =matchs::all();
        return view('coachMatchs')->with('matchs', $matchs);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(matchs $match , coach $coach)
    {
        $team = $coach->team;
        return view('squadlist')->with([
            'team' => $team,
            'match' => $match
        ]);  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(coach $coach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, coach $coach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(coach $coach)
    {
        //
    }
}
