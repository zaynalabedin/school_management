<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subject;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        $courses = Course::get();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }
    public function store(Request $request)
    {
        $courses = new Course();
        $courses->name = $request->input('name');

        $courses->save();

        return redirect('courses');
    }
    public function show($id)
    {

        $course = Course::find($id);

        $subjects=Subject::all();


        return view('courses.show', compact('course','subjects'));
    }
    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);

        $course->name = $request->input('name');
        $course->save();

        return redirect('courses');
    }
    public function destroy($id)
    {
        $courses = Course::find($id);
        $courses->delete();
        return back();

    }
}
