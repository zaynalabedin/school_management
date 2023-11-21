@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">



                        <p><img src="{{ asset('public/images/' . $teacher->user->image) }}" style="height: 80px; width:90px;"></p>
                        <p>{{ $teacher->user->name }}</p>
                        <p>{{ $teacher->user->email }}</p>
                        <p>{{ $teacher->designation->name }}</p>
                        <p>{{ $teacher->department->name }}</p>
                        <p>{{ $teacher->number }}</p>
                        <p>{{ $teacher->date_of_birth }}</p>
                        <p>{{ $teacher->current_addres }}</p>
                        <p>{{ $teacher->permanent_address }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
