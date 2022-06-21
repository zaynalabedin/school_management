<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class TeacherController extends Controller
{
    public function index()
    {

        // $users =User::find(1)->teacher;
        // dd($users);
        // $users=User::with('teacher')->get();
        $teachers=Teacher::with('user')->get();
// dd($teachers);
        // dd($users);
        // $teachers = DB::table('users')
        //     ->join('teachers', 'users.id', '=', 'teachers.user_id')

        //     ->get();
        return view('teachers.index', compact('teachers'));
        // return view('teachers.index', compact('users'));
    }
    public function create()
    {
        return view('teachers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'number' => 'required',
            'date_of_birth' => 'required',
            'current_addres',
            'permanent_address',

        ]);



        $users = new User();

        $users->name = $request->input('name');
        $users->email = $request->input('email');
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
        $teachers->date_of_birth = $request->input('date_of_birth');
        $teachers->current_addres = $request->input('current_addres');
        $teachers->permanent_address = $request->input('permanent_address');
        $teachers->save();
        return redirect('teachers');
    }

    public function show($id){


        // $data = DB::table('users')
        //     ->join('teachers', 'users.id', '=', 'teachers.user_id')
        //     ->where('teachers.id','=',$id)
        //     ->first();
            // dd($data);
            $data =User::with('teacher')->where('id',$id)->first();
            // dd($data);
        return view('teachers.show',compact('data'));
    }

    public function edit($id)
    {
        $user = User::with('teacher')->where('id', $id)->first();
        // dd($user);
        return view('teachers.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $users = User::find($id);

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

        $teacher = Teacher::find($id);

        $teacher->user_id = $users->id;
        $teacher->number = $request->input('number');
        $teacher->date_of_birth = $request->input('date_of_birth');
        $teacher->current_addres = $request->input('current_addres');
        $teacher->permanent_address = $request->input('permanent_address');

        $teacher->save();
        return back();

    }
    public function destroy($id)
    {        
        
        $teachers= User::find($id);
        // dd($teachers);
        $teachers->delete();
        
        
        $teachers= Teacher::find($id);
        // dd($teachers);
        $teachers->delete();
        return back();

    }
}
