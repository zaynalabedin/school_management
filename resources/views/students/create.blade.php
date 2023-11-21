
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="card">
            {{-- action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data" --}}
            <div class="card-body">
                <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Name">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Roll Number</label>
                        <input type="text" name="roll" value="{{ old('roll') }}" class="form-control" placeholder="Roll Number">
                        <span class="text-danger">
                            @error('roll')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Class Name</label>
                        <select name="choosedClass" class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            @foreach ($courses as $course )
                            <option value="{{ $course->id }}" >{{ $course->name }}</option>
                            @endforeach
                          </select>

                    </div>
                    <div class="form-group">
                        <label>Section</label>
                        <select name="choosed" class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            @foreach ($sections as $section )
                            <option value="{{ $section->id }}" >{{ $section->name }}</option>
                            @endforeach
                          </select>

                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="number" value="{{ old('number') }}" class="form-control" placeholder="Number">
                        <span class="text-danger">
                            @error('number')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label>Date of birth</label>
                        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control" placeholder="Date of Birth">
                        <span class="text-danger">
                            @error('date_of_birth')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Current Address</label>
                        <input type="text" name="current_addres" value="{{ old('current_addres') }}" class="form-control" placeholder="Current Address">
                        <span class="text-danger">
                            @error('current_addres')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Permanent Address</label>
                        <input type="text" name="permanent_address" value="{{ old('permanent_address') }}" class="form-control" placeholder="Permanent Address">
                        <span class="text-danger">
                            @error('permanent_address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control-file">
                        <span class="text-danger">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
