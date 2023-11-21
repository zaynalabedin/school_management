@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">


                        @if (Auth::user()->user_type == 'admin')
                            <p><img src="{{ asset('public/images/' . $user->image) }}" style="height: 80px; width:90px;"></p>
                            <p>{{ $user->name }}</p>
                            <p>{{ $user->email }}</p>
                        @elseif(Auth::user()->user_type == 'teacher')
                        <p><img src="{{ asset('public/images/' . $user->image) }}" style="height: 80px; width:90px;"></p>
                        <p>{{ $user->name }}</p>
                        <p>{{ $user->email }}</p>

                        <p>{{ $user->teacher->number }}</p>
                        <p>{{ $user->teacher->date_of_birth }}</p>
                        <p>{{ $user->teacher->current_addres }}</p>
                        <p>{{ $user->teacher->permanent_address }}</p>
                        @elseif(Auth::user()->user_type == 'student')
                        <p><img src="{{ asset('public/images/' . $user->image) }}" style="height: 80px; width:90px;"></p>
                        <p>{{ $user->name }}</p>
                        <p>{{ $user->email }}</p>

                        <p>{{ $user->student->number }}</p>
                        <p>{{ $user->student->date_of_birth }}</p>
                        <p>{{ $user->student->current_addres }}</p>
                        <p>{{ $user->student->permanent_address }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
