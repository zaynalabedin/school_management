<?php

namespace App\Http\Controllers;

use App\Models\User;
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


public function profile($id){
    $user = User::with('teacher','student')->where('id', $id)->first();
    return view('profiles.profile',compact('user'));
}


}
