@extends('admin.home')



@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('showadministrator') }}" class="btn btn-info btn-sm">Back</a>
                </div>
                <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert">
                            X
                        </button>
                        {{ session()->get('message') }}
                    </div>
                  @endif
                   <form action="{{ url('upload_doctor') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="name">Full Name<span class="text-danger">*</span></label>
                            <input id="name" class="form-control" type="text" name="fullname" placeholder="Full Name" value="{{ old("name") }}">
                        </div>

                        {{-- @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}

                        <div class="form-group">
                            <label for="phone">Contact Number<span class="text-danger">*</span></label>
                            <input id="phone" class="form-control" type="tel" name="number" placeholder="phone"  value="{{ old("phone") }}">
                        </div>

                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror


                        <div class="form-group">
                            <label for="speciality">Speciality</label>
                            <input id="speciality" class="form-control" type="text" name="speciality" placeholder="speciality" value="{{ old("speciality") }}">
                        </div>

                        <div class="form-group">
                            <label for="room">Adminitrator Room No.</label>
                            <input id="room" class="form-control" type="text" name="room" placeholder="room" value="{{ old("room") }}">
                        </div>



                        <div class="form-group">
                            <label for="image">Upload image <span class="text-danger">*</span></label>
                            <input id="image" class="form-control-file" type="file" name="image">
                        </div>


                        {{--
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror --}}

                        <button type="submit" class="btn btn-primary btn-sm">Save Record</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
