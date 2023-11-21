<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Course;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        // $subjects = Course::get();
        $subjects = Subject::with('course')->get();
        return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
        $courses= Course::get();
        return view('subjects.create',compact('courses'));
    }
    public function store(Request $request)
    {


        $subjects = new Subject();

        $subjects->course_id=$request->input('choosed');

        $subjects->name = $request->input('name');

        $subjects->save();

        return redirect('subjects');
    }
    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('subjects.edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $subject->course_id=$request->input('choosed');
        $subject->name = $request->input('name');
        $subject->save();

        return redirect()->back(); }
    public function destroy($id)
    {
        $subjects = Subject::find($id);
        $subjects->delete();
        return back();

    }
}
