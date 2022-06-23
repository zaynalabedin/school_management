@extends('layouts.app')
@section('content')
    {{-- @include('links.navbar') --}}
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('courses.create') }}">Add New Class</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Class Name</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>

                            <td>{{ $course->name }}</td>

                            <td>
                                <form class="mt-2" action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                    {{-- <a class="btn btn-info" href="{{ route('courses.show', $course->id) }}"
                                        >View</a> --}}
                                    <a class="btn btn-warning" href="{{ route('courses.edit', $course->id) }}"
                                        >Edit</a>
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
@endsection
