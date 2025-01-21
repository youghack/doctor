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
                            <th>Victim Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Complain</th>
                            <th>Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $administrator)
                            <tr>
                                <td>{{ $administrator->name }}</td>
                                <td>{{ $administrator->email }}</td>
                                <td>{{ $administrator->phone }}</td>
                                <td>{{ $administrator->date }}</td>
                                <td>{{ Str::words( $administrator->message, 5, '...') }} </td>
                                <td>{{ $administrator->status }}</td>
                                <td>
                                    <a class="btn btn-outline-success btn-sm" href="{{ url('done',$administrator->id) }}">done</a>
                                    <a class="btn btn-outline-danger btn-sm" href="{{ url('pending',$administrator->id) }}">Pending</a>
                                    <a class="btn btn-outline-primary btn-sm" href="{{ url('emailview',$administrator->id) }}">Send Mail</a>
                                    <a href="{{ url('viewcomplain',$administrator->id) }}" class="btn btn-outline-warning btn-sm">View</a>
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
