
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="card">
            {{-- action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data" --}}
            <div class="card-body">
                <form action="{{ route('students.update',$student->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $student->name }}" class="form-control">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ $student->email }}" class="form-control">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="number" value="{{ $student->number }}" class="form-control">
                        <span class="text-danger">
                            @error('number')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label>Date of birth</label>
                        <input type="date" name="date_of_birth" value="{{ $student->date_of_birth }}" class="form-control">
                        <span class="text-danger">
                            @error('date_of_birth')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Current Address</label>
                        <input type="text" name="current_addres" value="{{ $student->current_addres }}" class="form-control">
                        <span class="text-danger">
                            @error('current_addres')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Permanent Address</label>
                        <input type="text" name="permanent_address" value="{{ $student->permanent_address }}" class="form-control" >
                        <span class="text-danger">
                            @error('permanent_address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="images" class="form-control-file">
                        <img src="{{ asset('public/images/'.$student->images) }}" style="height: 80px; width:120px;">
                        <span class="text-danger">
                            @error('images')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection