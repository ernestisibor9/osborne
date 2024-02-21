<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
     
// $user->hasRole('admin');   // true
    
          if (Auth::user()->hasRole('admin')) {
            
            
            return view('admin-dashboard.user-dashboard');

        } else {
              
        return view('admin-dashboard.dashboard');
        }
      
    }

}
