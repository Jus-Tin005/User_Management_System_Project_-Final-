@extends('layouts.app')
@section('admin')

<!------------------------
        * Edit Brand *
  ------------------------>
  <div class="container my-5">
                    <form action="{{url('update/brand' .   $brands->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="old_image" value="{{$brands->brand_image}}">
                            <h5>Edit Brand</h5>
                            <div class="row">
                                    @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{session('success')}}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                                <label for="brand-name" class="mb-2">Brand Name</label>
                                                <input type="text" name="brand_name" class="form-control" value="{{$brands->brand_name}}">
                                                @error('brand_name')
                                                                <div class="text-danger mb-2">{{$message}}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                                <label for="brand" class="mb-2">Brand</label>
                                                <input type="text" name="brand" class="form-control" value="{{$brands->brand}}">
                                        </div>
                                    </div>


                            <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="b-img" class="mb-2">Brand Image</label>
                                        <input type="file" name="brand_image" class="form-control" value="{{$brands->brand_image}}">
                                        @error('brand_image')
                                                                <div class="text-danger mb-2">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                        <img src="{{asset($brands->brand_image)}}" style="width:350px;height:300px;">
                                </div>
                            </div>

                            <button type="submit"class="btn btn-success waves-effect waves-light">Update</button>
                    </form>
</div>
@endsection