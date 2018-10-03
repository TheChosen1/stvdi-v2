<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $role_id = Auth::user()->role_id;
        if ($role_id == 5 || $role_id == 6){
            return view('dashboard/customer');
        }else{
           return view('dashboard/admin'); 
        }
        
    }

}
