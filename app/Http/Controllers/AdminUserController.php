<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use App\Models\MaketNews;
use App\Models\Loser;
use App\Models\Gainer;
use App\Models\OsbornService;



class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        $users = User::all();
        $usersCount = User::count();
        $news = MaketNews::count();
        $gainers = Gainer::count();
        $losers = Loser::count();
        $adminUsers = AdminUser::all();
        return view('admin-dashboard.dashboard', compact('adminUsers', 'users','usersCount','news','gainers','losers'));
    }


    public function index()
    {


        $users = User::all();
        $adminUsers = AdminUser::all();
        return view('admin-dashboard.index', compact('adminUsers', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = User::all();
        $adminUsers = AdminUser::all();
        return view('admin-dashboard.register', compact('adminUsers', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $profile = AdminUser::create([
        //     'first_name' => $request->first_name,
        //     'middle_name' => $request->middle_name,
        //     'sur_name' => $request->sur_name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'password' => Hash::make($request->password),

        // ]);

        // validation
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'middle_name' => 'required|max:255',
            'sur_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'password' => 'required|confirmed',

        ]);

        
        $user = new User();
        // 'name' => $request->$request->first_name." ".$request->middle_name." ".$request->sur_name."",
        $user->name = $request->first_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();


        $adduser = new AdminUser();
        $adduser->first_name = $request->first_name;
        $adduser->middle_name = $request->middle_name;
        $adduser->sur_name = $request->sur_name;
        $adduser->email = $request->email;
        $adduser->phone = $request->phone;
        $adduser->password = Hash::make($request->password);
        $adduser->save();





        //   SweetAlert::success('Good job!');
        //   SweetAlert::success('Good job!')->persistent("Close");

        alert()->success('registered')->autoclose(3500);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function show(AdminUser $adminUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminUser $adminUser)
    {
        //
        $users = User::all();
        return view('admin-dashboard.edit', compact('adminUser', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminUser $adminUser)
    {
        //

        
        $user = User::find($adminUser->id);
        // 'name' => $request->$request->first_name." ".$request->middle_name." ".$request->sur_name."",
        $user->name = $request->first_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();



        $adduser = AdminUser::find($adminUser->id);
        $adduser->first_name = $request->first_name;
        $adduser->middle_name = $request->middle_name;
        $adduser->sur_name = $request->sur_name;
        $adduser->email = $request->email;
        $adduser->phone = $request->phone;
        $adduser->password = Hash::make($request->password);
        $adduser->save();


        alert()->success('updated successfully')->autoclose(3500);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminUser $adminUser)
    {
        $adminUser->delete();

        alert()->success('deleted successfully')->autoclose(3500);
        return back();
    }
}
