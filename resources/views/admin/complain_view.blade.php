@extends('admin.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <a href="{{ url('complain') }}">Back</a> --}}
                        <a href="{{ url('complain') }}" class="btn btn-primary">Back</a>
                        <h6 style="display: block; margin: 0 auto;"></h6>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset($data->avatar) }}" alt="blog image image" width="200px"
                            style="display: block; margin: 0 auto;">
                        <strong>Name of Victim: </strong><span>{{ $data->name }}</span><br>
                        <strong>Email: </strong><span>{{ $data->email }}</span> <br>
                        <strong>Citizenship No: </strong><span>{{ $data->citizenship }}</span> <br>
                        <strong>Phone Number: </strong><span>{{ $data->phone }}</span> <br>
                        <strong>Complain:</strong> <span>{!! $data->message !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
