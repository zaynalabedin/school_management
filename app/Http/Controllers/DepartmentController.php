<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        $departments = Department::get();
        return view('departments.index', compact('departments'));
    }
    public function create()
    {
        // $departments = Department::get();
        return view('departments.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required'
            ]);
        $departments = new Department();
        $departments->name = $request->input('name');

        $departments->save();

        return redirect('departments');
    }
    public function edit($id)
    {
        $departments = Department::find($id);
        return view('departments.edit', compact('departments'));
    }
    public function update(Request $request, $id)
    {
        $departments = Department::find($id);
        $departments->name = $request->input('name');
        $departments->save();

        return redirect('departments');
    }
    public function destory($id)
    {
        $departments = Department::find($id);
        $departments->delete();

        return back();
    }

}
