@extends('layouts.app')
@section('content')
    {{-- @include('links.navbar') --}}
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('students.create') }}">Add New Student</a>
    <div class="card">
        <div class="card-body">
            <h3 class="text-center bg-dark text-white">Class Eight Students List</h3>
            <table class="class="table table-responsive table-responsive-sm table-responsive-md table-responsive-lg text-capitalize text-center"">

                    <tr class="table-dark table-active text-uppercase text-white font-weight-normal text-center" style="font-size: 12px">
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Class</th>
                        <th scope="col">Section</th>
                        <th scope="col">Roll Number</th>
                        <th scope="col">Number</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Current Address</th>
                        <th scope="col">Permanent Address</th>
                        <th scope="col">Images</th>
                        <th scope="col">Action</th>
                    </tr>

                    @foreach ($students as $student)
                        <tr class="text-center" style="font-size: 14px">

                            <td>{{ $student->user->name }}</td>
                            <td>{{ $student->user->email }}</td>
                            <td>{{ $student->course->name }}</td>
                            <td>{{ $student->section->name }}</td>
                            <td>{{ $student->roll }}</td>
                            <td>{{ $student->number }}</td>
                            <td>{{ $student->date_of_birth }}</td>
                            <td>{{ $student->current_addres }}</td>
                            <td>{{ $student->permanent_address }}</td>
                            <td>
                                <img src="{{ asset('public/images/' . $student->user->image) }}"
                                    style="height: 80px; width:120px;">
                            </td>
                            <td>
                                <form class="mt-2" action="{{ route('students.destroy', $student->id,) }}" method="POST">
                                    <a href="{{ route('students.show',$student->id) }}"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('students.edit', $student->id) }}" target="_blank"><i class="fa fa-edit" style="color: #f5e52e;"></i></a>

                                </form>

                            </td>
                        </tr>
                    @endforeach

            </table>
        </div>
    </div>

@endsection
