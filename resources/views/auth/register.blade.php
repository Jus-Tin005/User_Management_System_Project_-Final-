
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
                <div class="forms-register">
                    <div class="form">
                            <span class="title">Registration</span>
                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                            <div class="input-field">
                                                <label for="name"></label>
                                                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" placeholder="Enter your name" required>
                                                @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <div class="input-field">
                                                <label for="email"></label>
                                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Enter your email" required>
                                                @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="input-field">
                                                <label for="password"></label>
                                                <input id="password" type="password" class="password @error('password') is-invalid @enderror"  name="password" autocomplete="new-password"  placeholder="Create a password" required>
                                                    @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                <i class="fas fa-lock"></i>
                                            </div>
                                            <div class="input-field">
                                                <label for="password-confirm"></label>
                                                <input id="password-confirm" type="password" class="password" name="password_confirmation" autocomplete="new-password" placeholder="Confirm a password" required>
                                                <i class="fas fa-lock"></i>
                                                <i class="fas fa-eye-slash showHidePw"></i>
                                            </div>

                                            <div class="checkbox-text">
                                                <div class="checkbox-content">
                                                    <input type="checkbox" id="termCon">
                                                    <label for="termCon" class="text">I accepted all terms and conditions</label>
                                                </div>
                                            </div>

                                            <div class="input-field button">
                                                    <button type="submit">{{ __('Register') }}</button>
                                            </div>
                            </form>

                            <div class="login-signup">
                                        <span class="text">Already a member?
                                            <a href="{{ route('login')}}" class="text login-link">Login Now</a>
                                        </span>
                            </div>
                    </div>
                </div>
            </div>


    <!-------------------
        * Custom JS *
     ------------------->
    <script src="{{asset('backend/assets/js/form.js')}}"></script>

</body>
</html>
