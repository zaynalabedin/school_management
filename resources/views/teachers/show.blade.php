@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">


                        @if (Auth::user()->user_type == 'admin')
                            <p><img src="{{ asset('public/images/' . $data->image) }}" style="height: 80px; width:90px;"></p>
                            <p>{{ $data->name }}</p>
                            <p>{{ $data->email }}</p>
                        @else
                        <p><img src="{{ asset('public/images/' . $data->image) }}" style="height: 80px; width:90px;"></p>
                        <p>{{ $data->name }}</p>
                        <p>{{ $data->email }}</p>

                        <p>{{ $data->teacher->number }}</p>
                        <p>{{ $data->teacher->date_of_birth }}</p>
                        <p>{{ $data->teacher->current_addres }}</p>
                        <p>{{ $data->teacher->permanent_address }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
