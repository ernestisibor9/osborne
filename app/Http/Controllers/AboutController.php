<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\About;
use App\Models\TeamCategory;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Requests\StoreAboutRequest;
use App\Models\Director;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(About $about,Team $team)
    {
        $abouts = About::all();
        $teams = Team::all();
        $ServiceCategories = ServiceCategory::all();
        $directors = Team::where('is_director', true)->get();
        $managements = Team::where('is_management', true)->get();
        return view('about.home-page', compact('abouts', 'teams', 'directors', 'managements', 'about','team'));
    }


    public function teamdetail(Team $team)
    {
        // dd($about);
        // $teams = Team::latest()->paginate(1);
        // $abouts = About::all();
        $directors = Team::where('is_director', true)->get();
        $managements = Team::where('is_management', true)->get();
        return view('about.teamdetail', compact('team', 'directors', 'managements'));
    }
    
    
    
    
     
    public function boardOfDirector(Request $request)
    {
        $directors = Team::where('is_director', true)->get();
                // dd($directors);

        return view('about.director-homepage', compact('directors'));
    }

    
    public function managentBoard(Request $request)
    {
        $managementTeam = Team::where('is_management', true)->get();
        $managements = [];
        $lastItem = $managementTeam[count($managementTeam)-1];
        unset($managementTeam[count($managementTeam)-1] );
        $managements[] = $lastItem;
        foreach($managementTeam as $management){
            $managements[] = $management;
        }
        return view('about.management-homepage', compact('managements'));
    }



     
    public function DirectorDetail(Team $team)
    {
        return view('about.director-detail', compact('team'));
    }

    
    public function managentBoardDetail(Team $team)
    {
        return view('about.management-detail', compact('team'));
    }




    public function managementTeamDetail(Team $team)
    {
       
        return view('about.managementDetail', compact('team'));
    }

    // public function teamdetail()
    // {
    //     //
    //     $teamCat = TeamCategory::all();
    //     $teams = Team::all();
    //     return view('about.teamdetail', compact('teams', 'teamCat'));
    // }

    public function aboutHistory()
    {
        $abouts = About::all();

        return view('about.admin-page', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $abouts = About::all();

        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAboutRequest $request)
    {

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'required|string',


        // ]);

        $validated = $request->all();
        About::create([
            'name' => $validated['name'],
            'description' => $validated['description'],

        ]);

        alert()->success('About Us Record Created successfully')->autoclose(3500);
        return back()->with('success', 'done successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        // $abouts = About::all();

        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAboutRequest $request, About $about)
    {
        $validated =$request->all();
        $about->update([
            'name' => $validated['name'],
            'description' => $validated['description'],

        ]);
        
        alert()->success('Record updated successfully')->autoclose(3500);
        return back()->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();

        alert()->success('Record deleted successfully')->autoclose(3500);

        return back()->with('success', 'deleted successfully');
    }
    
    public function showAllDirectors(Director $director){
        Director::all();
        
        return dd($director->all());
    }
    
    
    
    
}




