@extends('admin.home')



@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('showdoctor') }}" class="btn btn-info btn-sm">Back</a>
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
                   <form action="{{ url('editdoctor',$data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="name">Full Name<span class="text-danger">*</span></label>
                            <input id="name" class="form-control" type="text" name="fullname" placeholder="name" value="{{ $data->name }}">
                        </div>

                        {{-- @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}

                        <div class="form-group">
                            <label for="phone">Contact Number<span class="text-danger">*</span></label>
                            <input id="phone" class="form-control" type="tel" name="number" placeholder="phone"  value="{{ $data->phone}}">
                        </div>

                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="speciality">Speciality</label>
                            <input id="speciality" class="form-control" type="text" name="speciality" placeholder="speciality" value="{{ $data->speciality }}">
                        </div>

                        <div class="form-group">
                            <label for="room">Doctor Room No.</label>
                            <input id="room" class="form-control" type="text" name="room" placeholder="speciality" value="{{ $data->room }}">
                        </div>



                        <div class="form-group">

                            <label for="image">old image</label>
                            <img onmouseover="width='300'" onmouseout="width='100'" height="120" width="120" src="{{ asset($data->image) }}" alt="">
                            <br>
                            <label for="image">Update image <span class="text-danger">*</span></label>
                            <input id="image" class="form-control-file" type="file" name="image">


                        </div>


                        {{--
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror --}}

                        <button type="submit" class="btn btn-primary btn-sm">Update Record</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
