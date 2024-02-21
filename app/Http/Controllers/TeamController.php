<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamCategory;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;

class TeamController extends Controller
{

    public function index()
    {
        //
        $teamCat = TeamCategory::all();
        $teams = Team::paginate(2);
        $directors = Team::where('is_director', true)->get();
        $managements = Team::where('is_management', true )->get();
        return view('team.index', compact('teams', 'teamCat', 'directors', 'managements'));
    }


    
    public function teamdetail()
    {
        //
        $teamCat = TeamCategory::all();
        $teams = Team::all();
        return view('team.teamdetail', compact('teams', 'teamCat'));
    }


    public function create()
    {
        $teamCat = TeamCategory::all();
        $teams = Team::all();
        return view('team.create', compact('teams', 'teamCat'));


    }

    public function store(TeamRequest $request)
    {

        $validated=$request->all();
        // dd($validated);


        // Team::create($validated);
          $team = new Team();
            $team->name = $validated['name'];
            $team->designation = $validated['designation'];
            $team->bio = $validated['bio'];
            $team->is_management = $validated['position'] == 'is_management' ? true : false;
            $team->is_director = $validated['position'] == 'is_director' ? true : false;
            $team->save();
        

        alert()->success('Record Created successfully')->autoclose(3500);
        // return back();
        return back()->with('success', 'created successfully');

    }


    public function show(Team $team)
    {

    }


    public function edit(Team $team)
    {
        // dd($team);
        // $teamCat = TeamCategory::all();
        $teams = Team::findOrFail($team->id);
        return view('team.edit', compact('team'));
    }


    public function update(TeamRequest $request, Team $team)
    {
        // dd($request->all());
        $validated=$request->all();
       

        // $team->update($validated);

        // $teams = new Team();
        $team->name = $validated['name'];
        $team->designation = $validated['designation'];
        $team->bio = $validated['bio'];
        $team->is_management = $validated['position'] == 'is_management' ? true : false;
        $team->is_director = $validated['position'] == 'is_director' ? true : false;
        $team->save();
     alert()->success('updated successfully')->autoclose(3500);
        // return back();
        return redirect()->route('team.index')->with('success', 'update successfully');
    }


    public function destroy(Team $team)
    {
        $team->delete();
        alert()->success('Record deleted')->autoclose(3500);
        return back();
        // return back()-with('success', 'deleted successfully');
    }
}





