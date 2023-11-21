@extends('layouts.app')
@section('content')
    {{-- @include('students.navbar') --}}
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <p><img src="{{ asset('public/images/'.$student->user->image) }}" style="height: 80px; width:90px;"></p>
                        <p>Name              : {{ $student->user->name }}</p>
                        <p>Email             : {{ $student->user->email }}</p>
                        <p>Roll              : {{ $student->roll }}</p>
                        <p>Class Name        : {{ $student->course->name }}</p>
                        <p>Section           : {{ $student->section->name }}</p>
                        <p>Phone Number      : {{ $student->number }}</p>
                        <p>Date of Birth     : {{ $student->date_of_birth }}</p>
                        <p>Current Address   : {{ $student->current_addres }}</p>
                        <p>Permanent address : {{ $student->permanent_address }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
