@extends('layouts.app')
@section('content')
    {{-- @include('students.navbar') --}}
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <p><img src="{{ asset('public/images/'.$data->images) }}" style="height: 80px; width:90px;"></p>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
