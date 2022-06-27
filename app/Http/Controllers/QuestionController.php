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

    public function index()
    {
        // $subjects = Course::get();
        $questions = Question::with('course','subject','exam')->get();
        return view('questions.index', compact('questions'));
    }
    public function create()
    {
        $courses= Question::with('course','subject')->get();
        // $courses = Course::get();
        // $subjects = Subject::get();
        return view('questions.create',compact('courses'));
    }

    public function destroy($id)
    {
        $questions = Question::find($id);
        $questions->delete();
        return back();

    }
}
