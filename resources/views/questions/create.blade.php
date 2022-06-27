
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="card">
            {{-- action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data" --}}
            <div class="card-body">
                <form action="{{ route('questions.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Class Name</label>
                        <select name="choosed" class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>

                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Subject Name</label>
                        <select name="choosed" class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>

                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Exam Name</label>
                        <select name="choosed" class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            @foreach ($exams as $exam)
                                <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                            @endforeach
                        </select>

                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="images" class="form-control-file">
                        <span class="text-danger">
                            @error('images')
                                {{ $message }}
                            @enderror
                        </span>
                    </div> --}}


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
