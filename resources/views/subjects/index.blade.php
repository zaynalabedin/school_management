@extends('layouts.app')
@section('content')
    {{-- @include('links.navbar') --}}
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('subjects.create') }}">Add New Subject</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Subject Name</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>

                            <td>{{ $subject->name }}</td>

                            <td>
                                <form class="mt-2" action="{{ route('subjects.destroy', $subject->id) }}" method="POST">

                                    <a class="btn btn-warning" href="{{ route('subjects.edit', $subject->id) }}"
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
