
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="card">
            {{-- action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data" --}}
            <div class="card-body">
                <form action="{{ route('subjects.update',$subject->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Subject Name</label>
                        <input type="text" name="name" value="{{ $subject->name }}" class="form-control">
                        <span class="text-danger">
                            @error('name')
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
