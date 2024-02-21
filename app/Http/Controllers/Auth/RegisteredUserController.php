<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\AdminUser;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */


     
    // public function index()
    // {
    //     $users = User::all();
    //     return view('admin-dashboard.index', compact('users'));
    // }
    public function index()
    {
        $users = User::all();
        $adminUser = AdminUser::all();
        return view('auth.index', compact('users','adminUser'));
    }

    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }



     public function edit(AdminUser $adminUser, User $user)
    {
        //
        $adminUser = AdminUser::all();
        return view('auth.edit', compact('adminUser','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        
        $adduser = User::find($user->id);
        $adduser->name = $request->name;
        $adduser-> email = $request->email;
        $adduser->password = Hash::make($request->password);
        $adduser->save();

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminUser $adminUser, User $user)
    {
        $user->delete();
        return redirect()->route('auth.index')
            ->with('success', 'deleted successfully');
    }
}
