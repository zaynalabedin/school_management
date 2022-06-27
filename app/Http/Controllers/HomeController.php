<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        if (Auth::user()->user_type == 'admin') {

            return redirect()->route('admin.dashboard');
        }
        elseif (Auth::user()->user_type == 'teacher') {
            return redirect()->route('teachers.dashboard');
        }


        return view('home');
    }


    
}
