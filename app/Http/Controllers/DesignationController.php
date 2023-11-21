<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        $designations = Designation::get();
        return view('designations.index', compact('designations'));
    }
    public function create()
    {
        // $departments = Department::get();
        return view('designations.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required'
            ]);
        $designations = new Designation();
        $designations->name = $request->input('name');

        $designations->save();

        return redirect('designations');
    }
    public function edit($id)
    {
        $designations = Designation::find($id);
        return view('designations.edit', compact('designations'));
    }
    public function update(Request $request, $id)
    {
        $designations = Designation::find($id);
        $designations->name = $request->input('name');
        $designations->save();

        return redirect('departments');
    }
    public function destory($id)
    {
        $designations = Designation::find($id);
        $designations->delete();

        return back();
    }
}
