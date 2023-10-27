@extends('admin.home')



@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('add_doctor_view') }}" class="btn btn-info btn-sm">Add Doctor</a>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>phone</th>
                                <th>Speciality</th>
                                <th>Room No</th>
                                <th>Doctor Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $doctor)
                            <tr>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->phone }}</td>
                                <td>{{ $doctor->speciality }}</td>
                                <td>{{ $doctor->room }}</td>
                                <td> <img onmouseover="width='300'" onmouseout="width='50'" src="{{ asset($doctor->image) }}" width="50" alt="{{ $doctor->image }}"></td>
                                <td>
                                    <a onclick="return confirm('Confirm to delete?')" href="{{ url('deletedoctor',$doctor->id) }}" class="btn btn-outline-danger btn-sm">Delete</a>
                                    <a href="{{ url('updatedoctor',$doctor->id) }}" class="btn btn-outline-warning btn-sm">Update</a>
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
