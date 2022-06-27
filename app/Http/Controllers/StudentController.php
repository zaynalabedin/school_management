<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('students.dashboard');
    }
    public function index()
    {
        $students = Student::with('user')->get();
// dd($students);
        // $students = Student::get();
        return view('students.index', compact('students'));
    }
    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'student_id' => 'required',
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

        $students = new Student();
        $students->user_id = $users->id;
        $students->student_id = $request->input('student_id');
        $students->number = $request->input('number');
        $students->date_of_birth = $request->input('date_of_birth');
        $students->current_addres = $request->input('current_addres');
        $students->permanent_address = $request->input('permanent_address');

        $students->save();
        return redirect('students');
    }
    public function show($id)
    {


        $student = Student::with('user')->where('id', $id)->first();

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

        $student->student_id = $request->input('student_id');
        $student->number = $request->input('number');
        $student->date_of_birth = $request->input('date_of_birth');
        $student->current_addres = $request->input('current_addres');
        $student->permanent_address = $request->input('permanent_address');

        $student->save();

        return redirect()->back();

    }

    public function destroy($id)
    {
        $students = Student::find($id);
        $students->delete();
        return back();

    }
}
