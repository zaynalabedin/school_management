<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Dssignation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function dashboard()
    {
        return view('teachers.dashboard');
    }
    public function index()
    {

        $teachers = Teacher::with('user','designation','department')->get();

        return view('teachers.index', compact('teachers'));

    }
    public function create()
    {
        $designations = Designation::get();
        $departments = Department::get();
        return view('teachers.create', compact(['departments','designations']));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'designation' => 'required',
            'department' => 'required',
            'number' => 'required',
            'date_of_birth' => 'required',
            'current_addres',
            'permanent_address',

        ]);

        $users = new User();

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->user_type = 'teacher';
        $users->password = Hash::make($request->input('password'));
        if ($request->hasFile('image')) {
            $images = $request->file('image');
            $destinationPath = 'public/images';
            $teachersImage = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $teachersImage);
            $users['image'] = $teachersImage;
        }
        $users->save();

        $teachers = new Teacher();

        $teachers->user_id = $users->id;
        $teachers->number = $request->input('number');
        $teachers->designation_id = $request->input('designation');
        $teachers->department_id = $request->input('department');
        $teachers->date_of_birth = $request->input('date_of_birth');
        $teachers->current_addres = $request->input('current_addres');
        $teachers->permanent_address = $request->input('permanent_address');
        $teachers->save();
        return redirect('teachers');
    }

    public function show($id)
    {


        $teacher = Teacher::with('user')->where('id', $id)->first();

        return view('teachers.show', compact('teacher'));
    }

    public function edit($id)
    {
        $teacher = Teacher::with('user')->where('id', $id)->first();

        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {

        $teacher = Teacher::find($id);

        $users = User::where('id', $teacher->user_id)->first();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        if ($request->input('password') != '') {
            $users->password = Hash::make($request->input('password'));
        }
        if ($request->hasFile('image')) {
            $destinationPath = 'public/images' . $users->images;
            if (file::exists($destinationPath)) {
                file::delete($destinationPath);
            }
            $images = $request->file('image');
            $destinationPath = 'public/images';
            $teacherImages = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $teacherImages);
            $users['image'] = $teacherImages;
        }
        $users->save();

        $teacher->number = $request->input('number');
        $teacher->designation = $request->input('designation');
        $teacher->department = $request->input('department');
        $teacher->date_of_birth = $request->input('date_of_birth');
        $teacher->current_addres = $request->input('current_addres');
        $teacher->permanent_address = $request->input('permanent_address');

        $teacher->save();
        return redirect('teachers');

    }
    public function destroy($id)
    {
        $teachers = Teacher::find($id);
        dd($teachers);
        $users = User::where('id', $teachers->user_id)->first();

        $users->delete();
        $teachers->delete();
        return back();

    }
}
