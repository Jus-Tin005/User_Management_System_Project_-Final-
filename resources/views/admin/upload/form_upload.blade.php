<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>



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
</head>
<body>

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
                                                <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                </form>
                        </div>
                </div>
        </div>

        <!----------------------------------
        * Bootstrap *
        ------------------------------------>
        <script src="{{asset('backend/assets/libs/bootstrap-5.0.2-dist/js/bootstrap.js')}}"></script>


</body>
</html>