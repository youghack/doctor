@extends('admin.home')



@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert">
                            X
                        </button>
                        {{ session()->get('message') }}
                    </div>
                  @endif
                   <form action="{{ url('sendemail',$data->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="greeting">Greeting<span class="text-danger">*</span></label>
                            <input id="greeting" class="form-control" type="text" name="greeting" placeholder="greeting" value="{{ old("greeting") }}">
                        </div>


                        <div class="form-group">
                            <label for="body">Body<span class="text-danger">*</span></label>
                            <input id="body" class="form-control" type="text" name="body" placeholder="body"  value="{{ old("body") }}">
                        </div>

                        <div class="form-group">
                            <label for="actiontext">Action Text<span class="text-danger">*</span></label>
                            <input id="actiontext" class="form-control" type="text" name="actiontext" placeholder="actiontext"  value="{{ old("actiontext") }}">
                        </div>

                        <div class="form-group">
                            <label for="actionurl">Action URL<span class="text-danger">*</span></label>
                            <input id="actionurl" class="form-control" type="text" name="actionurl" placeholder="actionurl"  value="{{ old("actionurl") }}">
                        </div>

                        <div class="form-group">
                            <label for="endpart">End Part<span class="text-danger">*</span></label>
                            <input id="endpart" class="form-control" type="text" name="endpart" placeholder="endpart"  value="{{ old("endpart") }}">
                        </div>


                        <button type="submit" class="btn btn-primary btn-sm">Save Record</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
