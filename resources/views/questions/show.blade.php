@extends('layouts.app')
@section('content')
    {{-- @include('students.navbar') --}}
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        {{-- <p><img src="{{ asset('public/images/'.$data->images) }}" style="height: 80px; width:90px;"></p>
                         --}}
                         <p>Class Name: {{ $questions->course->name }}</p>
                         <p>Subject Name: {{ $questions->subject->name }}</p>

                         <p>Exam Name: {{ $questions->exam->name }}</p>
                         <p>Teacher Name: {{ $questions->name }}</p>
                         {{-- <p>{{ $questions->current_addres }}</p>
                         <p>{{ $questions->permanent_address }}</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
