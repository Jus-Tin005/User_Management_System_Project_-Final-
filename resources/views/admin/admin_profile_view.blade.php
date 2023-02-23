@extends('layouts.app')
@section('admin')
<div class="main-content">
                <div class="row">
                            <div class="col-lg-12">
                                <div class="card"><br><br>
                                   <center>
                                        <img  src="{{ (!empty($adminData->profile_image)) ? url('profile-upload/admin_images/' . $adminData->profile_image) : url('profile-upload/no-image.png') }}" class="rounded-circle avatar-md">
                                   </center>
                                   <div class="card-body">
                                        <h5 class="card-title">Name : {{$adminData->name}}</h5>
                                        <hr class="ruler">
                                        <h5 class="card-title">Username : {{$adminData->username}}</h5>
                                        <hr class="ruler">
                                        <h5 class="card-title">Email : {{$adminData->email}}</h5>
                                        <hr class="ruler">
                                        <a href="{{route('edit.profile')}}" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                 </div>
                                </div>
                            </div>
                </div>
</div>
@endsection