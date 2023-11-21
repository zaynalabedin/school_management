<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Student;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function dashboard()
    {
        return view('students.dashboard');
    }
    public function index()
    {
        $students = Student::with('user','course','section')->get();


        return view('students.index', compact('students'));
    }
    public function class_six()
    {
        $students = Course::where('name','=','Six')->get('id');
        $students = Student::where('course_id','=', '1')->with('user','section')->get();
        // dd($students);

        return view('students.classSixStudents', compact('students'));

    }
    public function class_seven()
    {
        $students = Course::where('name','=','Seven')->get('id');
        $students = Student::where('course_id','=', '2')->with('user','section')->get();
        // dd($students);

        return view('students.classSeven', compact('students'));

    }
    public function class_eight()
    {
        $students = Course::where('name','=','Eight')->get('id');
        $students = Student::where('course_id','=', '3')->with('user','section')->get();
        // dd($students);

        return view('students.classEight', compact('students'));

    }
    public function class_nine()
    {
        $students = Course::where('name','=','Nine')->get('id');
        $students = Student::where('course_id','=', '4')->with('user','section')->get();
        // dd($students);

        return view('students.classNine', compact('students'));

    }
    public function class_ten()
    {
        $students = Course::where('name','=','Ten')->get('id');
        $students = Student::where('course_id','=', '5')->with('user','section')->get();
        // dd($students);

        return view('students.classTen', compact('students'));

    }
    public function create()
    {
        $sections = Section::get();
        $courses = Course::get();
        return view('students.create', compact(['sections', 'courses']));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'roll' => 'required',
            'number' => 'required',
            'date_of_birth' => 'required',
            'current_addres',
            'permanent_address',
        ]);

        $users = new User();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('password'));
        $users->user_type = 'student';

        if ($request->hasFile('image')) {
            $images = $request->file('image');
            $destinationPath = 'public/images';
            $studentsImage = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $studentsImage);
            $users['image'] = $studentsImage;
        }
        $users->save();

        // $courses= new Course();
        // $sections= new Section();

        $students = new Student();
        $students->user_id = $users->id;
        $students->course_id=$request->input('choosedClass');
        $students->section_id =$request->input('choosed');
        $students->roll = $request->input('roll');
        $students->number = $request->input('number');
        $students->date_of_birth = $request->input('date_of_birth');
        $students->current_addres = $request->input('current_addres');
        $students->permanent_address = $request->input('permanent_address');

        $students->save();
        return redirect()->back();
    }
    public function show($id)
    {


        $student = Student::with('user','course','section')->where('id', $id)->first();

        return view('students.show', compact('student'));
    }

    public function edit($id)
    {


        $student = Student::with('user')->where('id', $id)->first();

        return view('students.edit', compact('student'));
    }
    public function update(Request $request ,$id )
    {
        $student = Student::find($id);

        $user = User::where('id', $student->user_id)->first();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->input('password') != '') {
            $user->password = Hash::make($request->input('password'));
        }
        if ($request->hasFile('image')) {
            $destinationPath = 'public/images' . $user->image;
            if (file::exists($destinationPath)) {
                file::delete($destinationPath);
            }
            $images = $request->file('image');
            $destinationPath = 'public/images';
            $studentImages = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $studentImages);
            $user['image'] = $studentImages;
        }

        $user->save();

        $student->roll = $request->input('roll');
        $student->number = $request->input('number');
        $student->date_of_birth = $request->input('date_of_birth');
        $student->current_addres = $request->input('current_addres');
        $student->permanent_address = $request->input('permanent_address');

        $student->save();

        return redirect()->back();

    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $users = User::where('id', $student->user_id)->first();


        $users->delete();
        $student->delete();
        return back();

    }
}
