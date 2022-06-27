<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');

    }
public function dashboard(){
    return view('admin.dashboard');
}


}
