@extends('admin.home')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="datatable">
                        <thead>
                            <tr>
                            <th>Patient Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Doctor Name</th>
                            <th>Date</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $appoint)
                            <tr>
                                <td>{{ $appoint->name }}</td>
                                <td>{{ $appoint->email }}</td>
                                <td>{{ $appoint->phone }}</td>
                                <td>{{ $appoint->doctor }}</td>
                                <td>{{ $appoint->date }}</td>
                                <td>{{ $appoint->message }}</td>
                                <td>{{ $appoint->status }}</td>
                                <td>
                                    <a class="btn btn-outline-success btn-sm" href="{{ url('approved',$appoint->id) }}">Approve</a>
                                    <a class="btn btn-outline-danger btn-sm" href="{{ url('canceled',$appoint->id) }}">Cancel</a>
                                    <a class="btn btn-outline-primary btn-sm" href="{{ url('emailview',$appoint->id) }}">Send Mail</a>
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
