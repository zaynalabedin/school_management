
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="card">
            {{-- action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data" --}}
            <div class="card-body">
                <form action="{{ route('teachers.update',$teacher->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    {{-- <input type="hidden" name="id" value="{{ $user->id }}"> --}}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $teacher->user->name }}" class="form-control">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" value="{{ $teacher->designation->name }}" class="form-control">
                        <span class="text-danger">
                            @error('designation')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text" name="department" value="{{ $teacher->department->name }}" class="form-control">
                        <span class="text-danger">
                            @error('department')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" value="{{ $teacher->user->email }}" class="form-control">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="number" value="{{ $teacher->number }}" class="form-control">
                        <span class="text-danger">
                            @error('number')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label>Date of birth</label>
                        <input type="date" name="date_of_birth" value="{{ $teacher->date_of_birth }}" class="form-control">
                        <span class="text-danger">
                            @error('date_of_birth')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Current Address</label>
                        <input type="text" name="current_addres" value="{{ $teacher->current_addres }}" class="form-control" >
                        <span class="text-danger">
                            @error('current_addres')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Permanent Address</label>
                        <input type="text" name="permanent_address" value="{{ $teacher->permanent_address }}" class="form-control">
                        <span class="text-danger">
                            @error('permanent_address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Image</label>

                        <input type="file" name="image" class="form-control-file">
                        <img src="{{ asset('public/images/'.$teacher->user->image) }}" style="height:80px; width:120px; ">
                        <span class="text-danger">
                            @error('image')
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
