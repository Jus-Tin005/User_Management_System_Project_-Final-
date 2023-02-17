
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!----------------------------------
                * Font Awesome *
          ------------------------------------>
          <link rel="stylesheet" href="{{asset('backend/assets/libs/fontawesome-free-5.15.4-web/css/all.css')}}"/>

           <!----------------------------------
                * Bootstrap *
          ------------------------------------>
          <link href="{{asset('backend/assets/libs/bootstrap-5.0.2-dist/css/bootstrap.css')}}" rel="stylesheet">

    <!-------------------
        * Custom CSS *
     ------------------->
     <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
     <link rel="stylesheet" href="{{asset('backend/assets/css/user_details.css')}}" type="text/css">

    <title></title>
</head>
<body style="height: 100vh;
                       display: flex;
                       align-items: center;
                       justify-content: center;
                       background-image: url('{{asset('backend/assets/images/bg.jpg')}}');
                       background-repeat: no-repeat;
                       background-size: cover;">



<div class="container-login-forgot">
<div class="forms-register">
        <div class="form">
            <span class="forgot-title pt-3">{{ __('Reset Password') }}</span>
                    <form method="POST" action="{{ route('password.update') }}" class="pt-4">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="row mb-2">
                                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                    </div>

                                    <div class="row  mb-2">
                                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                    </div>


                                    <div class="row  mb-2">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                    </div>


                                    <div class="input-field d-flex justify-content-center align-items-center">
                                            <button type="submit" class="btn btn-primary">
                                                    {{ __('Reset Password') }}
                                            </button>
                                    </div>
                    </form>
            </div>
    </div>
</div>


    <!-------------------
        * Custom JS *
     ------------------->
    <script src="{{asset('backend/assets/js/form.js')}}"></script>

</body>
</html>


