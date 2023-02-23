@extends('layouts.app')
@section('admin')
                <!----------------------------------
                                        * jQuery *
                    ------------------------------------>
                    <script src="{{asset('backend/assets/libs/jquery/jquery-3.6.3.min.js')}}"></script>

<div class="main-content">
        <div class="row">
                <div class="col-12">
                        <div class="card">
                                <div class="card-body">
                                        <h5 class="card-title">Edit Profile Page</h5>
                                        <form action="{{route('store.profile')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Name :</label>
                                                        <div class="col-sm-10">
                                                                <input type="text" name="name" id="" class="form-control" value="{{ $editData->name}}">
                                                        </div>
                                                </div>
                                                <div class="row mb-3">
                                                        <label for="username" class="col-sm-2 col-form-label">Username :</label>
                                                        <div class="col-sm-10">
                                                                <input type="text" name="username" id="" class="form-control" value="{{ $editData->username}}">
                                                        </div>
                                                </div>
                                                <div class="row mb-3">
                                                        <label for="email" class="col-sm-2 col-form-label">Email :</label>
                                                        <div class="col-sm-10">
                                                                <input type="text" name="email" id="" class="form-control" value="{{ $editData->email}}">
                                                        </div>
                                                </div>
                                                <div class="row mb-3">
                                                        <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                                        <div class="col-sm-10">
                                                                <input type="file" name="profile_image" id="image" class="form-control">
                                                        </div>
                                                </div>
                                                <div class="row mb-3">
                                                        <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                                        <div class="col-sm-10">
                                                                <img  src="{{ (!empty($editData->profile_image)) ? url('profile-upload/admin_images/' . $editData->profile_image) : url('profile-upload/no-image.png') }}" id="showImage" class="rounded avatar-lg">
                                                        </div>
                                                </div>
                                                <input type="submit" class="btn btn-success btn-rounded waves-effect waves-light" value="Update">
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
</div>

<!--------------------
        * Change Profile Images *
  ---------------------->
<script type="text/javascript">
        $(document).ready(function(){
                $("#image").change(function(e){
                        var reader = new FileReader();
                        reader.onload = function(e){
                                $("#showImage").attr("src",e.target.result);
                        }
                        reader.readAsDataURL(e.target.files['0']);
                });
        });
</script>
@endsection



