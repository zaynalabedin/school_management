<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        // $subjects = Course::get();
        $exams = Exam::get();
        return view('exams.index', compact('exams'));
    }
    public function create()
    {
        $exams= Exam::get();
        return view('exams.create',compact('exams'));
    }

    public function store(Request $request)
    {
        $exams = new Exam();

        $exams->name = $request->input('name');

        $exams->save();

        return redirect('exams');
    }

    public function edit($id)
    {
        $exam = Exam::find($id);
        return view('exams.edit', compact('exam'));
    }

    public function update(Request $request, $id)
    {
        $exam = Exam::find($id);

        $exam->name = $request->input('name');
        $exam->save();

        return redirect()->back();
    }
    public function destroy($id)
    {
        $exams = Exam::find($id);
        $exams->delete();
        return back();

    }
}
