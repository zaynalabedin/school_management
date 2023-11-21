@extends('layouts.app')

@section('content')
    {{-- @include('links.navbar') --}}
    <div class="container-fluid">
        <a class="btn btn-primary mt-3 mb-3" href="{{ route('groups.create') }}">Add New Teacher</a>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="row"></div>
                    <div class="card-body">
                        <table class="table table-responsive table-responsive-sm table-responsive-md table-responsive-lg text-capitalize text-center">

                                <tr class="table-dark table-active text-uppercase text-white font-weight-normal" style="font-size: 12px">

                                    <th>Group Name</th>
<th>Action</th>
                                </tr>



                                @foreach ($groups as $group)
                                    <tr style="font-size: 14px">


                                        <td>{{ $group->name }}</td>


                                        <td>
                                            <form class="mt-2" action="{{ route('groups.destroy', $group->id) }}"
                                                method="POST">

                                                <a href="{{ route('groups.edit', $group->id) }}" target="_blank"><i class="fa fa-edit" style="color: #f5e52e;"></i></a>
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
            <div class="col-sm-3"></div>
        </div>

    </div>
@endsection
