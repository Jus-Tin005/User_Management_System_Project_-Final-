
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

    <!-------------------
        * Custom CSS *
     ------------------->
     <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">

    <title></title>
</head>
<body style="height: 100vh;
                       display: flex;
                       align-items: center;
                       justify-content: center;
                       background-image: url('{{asset('backend/assets/images/bg.jpg')}}');
                       background-repeat: no-repeat;
                       background-size: cover;">



<div class="container-login">
        <div class="forms reset-form">
              <div class="form">
                        <span class="title reset-title">{{ __('Reset Password') }}</span>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                                    <div class="input-field">
                                            <label for="email"  class="col-md-4 col-form-label text-md-end"></label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="input-field button">
                                            <button type="submit">{{ __('Send Password Reset Link') }}</button>
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
