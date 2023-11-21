<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Course;

class SectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        // $subjects = Course::get();
        $sections = Section::get();
        return view('sections.index', compact('sections'));
    }
    public function create()
    {

        return view('sections.create');
    }

    public function store(Request $request)
    {
        // $course= new Course();

        $sections = new Section();



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
