@extends('admin.home')



@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('add_administrator_view') }}" class="btn btn-info btn-sm">Add Administrator</a>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>Administrator Name</th>
                                <th>phone</th>
                                <th>Position</th>
                                <th>Room No</th>
                                <th>Administrator Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $administrator)
                            <tr>
                                <td>{{ $administrator->name }}</td>
                                <td>{{ $administrator->phone }}</td>
                                <td>{{ $administrator->speciality }}</td>
                                <td>{{ $administrator->room }}</td>
                                <td> <img onmouseover="width='300'" onmouseout="width='50'" src="{{ asset($administrator->image) }}" width="50" alt="{{ $administrator->image }}"></td>
                                <td>
                                    <a onclick="return confirm('Confirm to delete?')" href="{{ url('deleteadministrator',$administrator->id) }}" class="btn btn-outline-danger btn-sm">Delete</a>
                                    <a href="{{ url('update_administrator',$administrator->id) }}" class="btn btn-outline-warning btn-sm">Update</a>
                                </td>
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
