@extends('layouts.app')
@section('content')
    {{-- @include('links.navbar') --}}
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('exams.create') }}">Add New Exam</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Exam Name</th>
                        {{-- <th scope="col">Section Name</th> --}}

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($exams as $exam)
                        <tr>
                            {{-- <td>{{ $exam->course->name }}</td> --}}
                            <td>{{ $exam->name }}</td>

                            <td>
                                <form class="mt-2" action="{{ route('exams.destroy', $exam->id) }}" method="POST">

                                    <a class="btn btn-warning" href="{{ route('exams.edit', $exam->id) }}"
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
