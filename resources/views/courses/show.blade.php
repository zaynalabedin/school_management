@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <label for="">Class Name</label>
                        <p>{{ $course->name }}</p>
                        <table>
                            <tr>
                                <th>Subject Name</th>
                            </tr>
                            <tbody>
                                @foreach ($subjects as $subject)

                                <tr>
                                    <td>{{ $subject->name }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
