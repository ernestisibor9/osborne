<?php

namespace App\Http\Controllers;

use App\Models\TeamCategory;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamCategories = TeamCategory::all();
        $teams = Team::all();
        
        return view('team-category.index', compact('teams', 'teamCat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teamCategories = TeamCategory::all();
        return view('team-category.index', compact('teamCategories'));
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
            'name' => 'required|string|max:255',
         
        ]);

        Team::create([
            'name' => $request->name,

        ]);
        alert()->success('Record Created successfully')->autoclose(3500);
        // return back();
        return back()->with('success', 'created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamCategory  $teamCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TeamCategory $teamCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamCategory  $teamCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamCategory $teamCategory)
    {

        return view('team-category.edit', compact('teamCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamCategory  $teamCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamCategory $teamCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
           
        ]);

        $team->update([
            'name' => $request->name,

        ]);
        alert()->success('registered')->autoclose(3500);
        // return back();
        return back()->with('success', 'update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamCategory  $teamCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamCategory $teamCategory)
    {
        $teamCategory->delete();

        alert()->success('updated successfully')->autoclose(3500);
        // return back();
        return back()->with('success', 'update successfully');
    }
}
