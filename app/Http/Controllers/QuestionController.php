<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Exam;
use App\Models\Teacher;

class QuestionController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');

    // }
    public function index()
    {
        // $questions = Course::get();
        $questions = Question::with('course','subject','exam')->get();
        // dd($questions);
        return view('questions.index', compact('questions'));
    }
    public function create()
    {
        // $courses= Question::with('course')->get();
        // dd($courses);
        $courses = Course::get();
        $subjects = Subject::get();
        $exams = Exam::get();
        return view('questions.create',compact('courses','subjects','exams'));
    }
public function store(Request $request){

    $questions = new Question();

    $questions->course_id= $request->input('choosed');
    $questions->subject_id= $request->input('choosed_sub');
    $questions->exam_id= $request->input('choosed_exam');
    $questions->name= $request->input('name');

    $questions->save();
    return redirect('questions');
}

public function show($id){

    $questions = Question::with('course','subject','exam')->first();
// dd($questions);
    return view('questions.show',compact('questions'));
}
    public function destroy($id)
    {
        $questions = Question::find($id);
        $questions->delete();
        return back();

    }
}
