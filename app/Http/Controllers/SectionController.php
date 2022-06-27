<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Course;

class SectionController extends Controller
{
    public function index()
    {
        // $subjects = Course::get();
        $sections = Section::with('course')->get();
        return view('sections.index', compact('sections'));
    }
    public function create()
    {
        $courses= Course::get();
        return view('sections.create',compact('courses'));
    }

    public function store(Request $request)
    {
        // $course= new Course();

        $sections = new Section();

        $sections->course_id=$request->input('choosed');

        $sections->name = $request->input('name');
// dd($subjects);
        $sections->save();

        return redirect('sections');
    }
    public function edit($id)
    {
        $section = Section::find($id);
        return view('sections.edit', compact('section'));
    }

    public function update(Request $request, $id)
    {
        $section = Section::find($id);
        $section->course_id=$request->input('choosed');
        $section->name = $request->input('name');
        $section->save();

        return redirect()->back();
    }
    public function destroy($id)
    {
        $sections = Section::find($id);
        $sections->delete();
        return back();

    }
}
