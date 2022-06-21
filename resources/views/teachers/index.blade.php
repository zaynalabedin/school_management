@extends('layouts.app')

@section('content')
    {{-- @include('links.navbar') --}}
    <div class="container-fluid">
        <a class="btn btn-primary mt-3 mb-3" href="{{ route('teachers.create') }}">Add New Teacher</a>
        <div class="card">
            <div class="row"></div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Date of Birth</th>
                            <th>Current Address</th>
                            <th>Permanent Address</th>
                            <th>Images</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($users as $user) --}}
                        @foreach ($teachers as $teacher)
                            <tr>

                                {{-- <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->teacher->number }}</td>
                                <td>{{ $user->teacher->date_of_birth }}</td>
                                <td>{{ $user->teacher->current_addres }}</td>
                                <td>{{ $user->teacher->permanent_address }}</td>
                                <td>
                                    <img src="{{ asset('public/images/' . $user->image) }}"
                                        style="height: 80px; width:120px;">
                                </td> --}}
                                <td>{{ $teacher->user->name }}</td>
                                <td>{{ $teacher->user->email }}</td>
                                <td>{{ $teacher->number }}</td>
                                <td>{{ $teacher->date_of_birth }}</td>
                                <td>{{ $teacher->current_addres }}</td>
                                <td>{{ $teacher->permanent_address }}</td>
                                <td>
                                    <img src="{{ asset('public/images/' . $teacher->user->image) }}"
                                        style="height: 80px; width:120px;">
                                </td>
                                <td>
                                    <form class="mt-2" action="{{ route('teachers.destroy', $teacher->id) }}"
                                        method="POST">
                                        <a class="btn btn-info"
                                            href="{{ route('teachers.show', $teacher->id) }}">Show</a>
                                        <a class="btn btn-warning" href="{{ route('teachers.edit', $teacher->id) }}"
                                            target="_blank">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
