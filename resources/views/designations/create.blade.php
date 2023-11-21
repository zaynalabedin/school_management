
@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="card">

            <div class="card-body">
                <form action="{{ route('designations.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label>Designation Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Designation Name">
                        <span class="text-danger">
                            @error('name')
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
