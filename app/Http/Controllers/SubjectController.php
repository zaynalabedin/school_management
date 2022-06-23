<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Course;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::get();
        return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
        return view('subjects.create');
    }
    public function store(Request $request,Course $course)
    {
        // $course= new Course();

        $subjects = new Subject();


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
        $subject->name = $request->input('name');
        $subject->save();

        return redirect()->back();
    }
    public function destroy($id)
    {
        $subjects = Subject::find($id);
        $subjects->delete();
        return back();

    }
}
