
@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="card">
            {{-- action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data" --}}
            <div class="card-body">
                <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
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
                        <label>Designation</label>
                        <select name="designation" class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            @foreach ($designations as $designation)
                                <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <select name="department" class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
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
                        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control">
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
                        <label>Images</label>
                        <input type="file" name="image" value="{{ old('image') }}" class="form-control-file">
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
