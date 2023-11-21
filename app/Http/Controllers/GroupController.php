<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        $groups = Group::get();
        return view('groups.index', compact('groups'));
    }
    public function create()
    {
        // $departments = Department::get();
        return view('groups.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required'
            ]);
        $groups = new Group();
        $groups->name = $request->input('name');

        $groups->save();

        return redirect('groups');
    }
    public function edit($id)
    {
        $groups = Group::find($id);
        return view('groups.edit', compact('groups'));
    }
    public function update(Request $request, $id)
    {
        $groups = Group::find($id);
        $groups->name = $request->input('name');
        $groups->save();

        return redirect('groups');
    }
    public function destory($id)
    {
        $groups = Group::find($id);
        $groups->delete();

        return back();
    }
}
