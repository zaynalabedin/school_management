<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
        $students = Student::get();
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
            'email' => 'required|email|unique:students',
            'password' => 'required|min:6',
            'number' => 'required',
            'date_of_birth' => 'required',
            'current_addres',
            'permanent_address',
        ]);

        $students = new Student();
        $students->name = $request->input('name');
        $students->email = $request->input('email');
        $students->password = Hash::make($request->input('password'));
        $students->number = $request->input('number');
        $students->date_of_birth = $request->input('date_of_birth');
        $students->current_addres = $request->input('current_addres');
        $students->permanent_address = $request->input('permanent_address');

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $destinationPath = 'public/images';
            $studentsImage = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $studentsImage);
            $students['images'] = $studentsImage;
        }

        // dd($input);
        $students->save();
        return redirect('students');
    }
    public function show($id)
    {
        $data = Student::find($id);
        return view('students.show', compact('data'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }
    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->name = $request->input('name');
        $student->email = $request->input('email');
        if ($request->input('password') != '') {
            $student->password = Hash::make($request->input('password'));
        }
        $student->number = $request->input('number');
        $student->date_of_birth = $request->input('date_of_birth');
        $student->current_addres = $request->input('current_addres');
        $student->permanent_address = $request->input('permanent_address');

        if ($request->hasFile('images')) {
            $destinationPath = 'public/images' . $student->images;
            if (file::exists($destinationPath)) {
                file::delete($destinationPath);
            }
            $images = $request->file('images');
            $destinationPath = 'public/images';
            $studentImages = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $studentImages);
            $student['images'] = $studentImages;
        }
        $student->save();
        return back();
        // return view('teachers.create');
    }
    // public function show($id){
    //     $data= Student::find($id);
    //     return view('students.show',compact('data'));
    // }
    public function destroy($id)
    {
        $students = Student::find($id);
        $students->delete();
        return back();
        // return view('teachers.create');
    }
}
