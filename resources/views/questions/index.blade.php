@extends('layouts.app')
@section('content')

    <a class="btn btn-primary mt-3 mb-3" href="{{ route('questions.create') }}">Add New Question</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Class Name</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Exam Name</th>
                        <th scope="col">Question Paper</th>
                        <th scope="col">Teacher Name</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $question)
                        <tr>

                            <td>{{ $question->course->name }}</td>
                             <td>{{ $question->subject->name }}</td>
                            <td>{{ $question->exam->name }}</td>
                            <td>
                                <img src="#" style="height: 80px; width:120px;">
                            </td>
                            <td>{{ $question->name }}</td>
                            <td>
                                <form class="mt-2" action="{{ route('questions.destroy', $question->id) }}" method="POST">
                                    <a class="btn btn-warning" href="{{ route('questions.show', $question->id) }}"
                                        >View</a>
                                    <a class="btn btn-warning" href="{{ route('questions.edit', $question->id) }}"
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
