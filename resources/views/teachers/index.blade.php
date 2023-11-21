@extends('layouts.app')

@section('content')
    {{-- @include('links.navbar') --}}
    <div class="container-fluid">
        <a class="btn btn-primary mt-3 mb-3" href="{{ route('teachers.create') }}">Add New Teacher</a>
        <div class="card">
            <div class="row"></div>
            <div class="card-body">
                <table class="table table-responsive table-responsive-sm table-responsive-md table-responsive-lg text-capitalize text-center">

                        <tr class="table-dark table-active text-uppercase text-white font-weight-normal" style="font-size: 12px">
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Department</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Date of Birth</th>
                            <th>Current Address</th>
                            <th>Permanent Address</th>
                            <th>Images</th>
                            <th>Action</th>
                        </tr>


                        {{-- @foreach ($users as $user) --}}
                        @foreach ($teachers as $teacher)
                            <tr style="font-size: 14px">


                                <td>{{ $teacher->user->name }}</td>
                                <td>{{ $teacher->designation->name }}</td>
                                <td>{{ $teacher->department->name }}</td>
                                <td>{{ $teacher->user->email }}</td>
                                <td>{{ $teacher->number }}</td>
                                <td>{{ $teacher->date_of_birth }}</td>
                                <td>{{ $teacher->current_addres }}</td>
                                <td>{{ $teacher->permanent_address }}</td>
                                <td>
                                    <img src="{{ asset('public/images/' . $teacher->user->image) }}"
                                        style="height: 50px; width:100%;">
                                </td>
                                <td>
                                    <form class="mt-2" action="{{ route('teachers.destroy', $teacher->id) }}"
                                        method="POST">
                                        <a href="{{ route('teachers.show', $teacher->id) }}"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('teachers.edit', $teacher->id) }}" target="_blank"><i class="fa fa-edit" style="color: #f5e52e;"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <i type="submit"><i class="fa fa-trash" style="color: red"></i></i>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
