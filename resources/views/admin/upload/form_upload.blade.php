@extends('layouts.app')
@section('admin')
      <!----------------------------------
                * Font Awesome *
          ------------------------------------>
          <link rel="stylesheet" href="{{asset('backend/assets/libs/fontawesome-free-5.15.4-web/css/all.css')}}"/>


          <!----------------------------------
                * Bootstrap *
          ------------------------------------>
          <link href="{{asset('backend/assets/libs/bootstrap-5.0.2-dist/css/bootstrap.css')}}" rel="stylesheet">


         <!-------------------------
                * Custom CSS *
         --------------------------->
         <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
         <link rel="stylesheet" href="{{asset('backend/assets/css/form_upload.css')}}">


        <div class="drag-continer">
                <div class="drag-content">
                        <div class="drag-area">
                                <div class="icon">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                </div>
                                <h5>Drag & Drop to Upload File</h5>
                                <span>OR</span>
                                <form action="{{route('upload')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                                <input type="file" name="file" class="form-control">
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center my-3">
                                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light mx-2">Send To Server</button>
                                        </div>
                                </form>
                                <form action="{{route('upload.profile')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                                <input type="file" name="profile_image" class="form-control">
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center my-3">
                                                <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Send To Local</button>
                                        </div>
                                </form>
                        </div>
                </div>
        </div>

        <!----------------------------------
        * Bootstrap *
        ------------------------------------>
        <script src="{{asset('backend/assets/libs/bootstrap-5.0.2-dist/js/bootstrap.js')}}"></script>
        @endsection

