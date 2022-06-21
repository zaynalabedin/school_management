@extends('layouts.app')
@section('content')
    {{-- @include('links.navbar') --}}
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('students.create') }}">Add New Student</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Current Address</th>
                        <th scope="col">Permanent Address</th>
                        <th scope="col">Images</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>

                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->number }}</td>
                            <td>{{ $student->date_of_birth }}</td>
                            <td>{{ $student->current_addres }}</td>
                            <td>{{ $student->permanent_address }}</td>
                            <td>
                                <img src="{{ asset('public/images/' . $student->images) }}"
                                    style="height: 80px; width:120px;">
                            </td>
                            <td>
                                <form class="mt-2" action="{{ route('students.destroy', $student->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
                                    <a class="btn btn-warning" href="{{ route('students.edit', $student->id) }}"
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
@endsection
