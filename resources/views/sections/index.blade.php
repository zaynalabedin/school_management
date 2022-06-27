@extends('layouts.app')
@section('content')
    {{-- @include('links.navbar') --}}
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('sections.create') }}">Add New Section</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Class Name</th>
                        <th scope="col">Section Name</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sections as $section)
                        <tr>
                            <td>{{ $section->course->name }}</td>
                            <td>{{ $section->name }}</td>

                            <td>
                                <form class="mt-2" action="{{ route('sections.destroy', $section->id) }}" method="POST">

                                    <a class="btn btn-warning" href="{{ route('sections.edit', $section->id) }}"
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
