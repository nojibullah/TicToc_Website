{{-- @include is just like a basic PHP include --}}
@extends('layouts.app')
{{--@section define master layout--}}
@section('content')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    {{--
        Laravel provides helper function - asset() which generates URL for your assets.
        The css and js file is in the public folder.
        The asset () is specify this url.
        So {{asset('login/images/icons/favicon.ico')}} is same to public/login/images/icons/favicon.ico

    --}}

    <link rel="icon" type="image/png" href="{{asset('login/images/icons/favicon.ico')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
    <!--===============================================================================================-->
<style>

</style>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{asset('login/images/img-01.png')}}" alt="IMG">
                </div>

                    <form method="POST" action="{{ route('login') }}" style="width: 60%;margin-top: 40px;">
                        {{--
                            Laravel makes it easy to protect your application from cross-site request forgery (CSRF) attacks.
                            Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.
                            Laravel automatically generates a CSRF "token" for each active user session managed by the application.
                            This token is used to verify that the authenticated user is the one actually making the requests to the application.
                            Anytime you define an HTML form in your application,
                            you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request.
                            So use the @csrf Blade directive to generate the token field:
                            The VerifyCsrfToken middleware, which is included in the web middleware group,
                            will automatically verify that the token in the request input matches the token stored in the session.
                         --}}
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4" style="text-align: center;">
                                <button type="submit" class="btn btn-primary" style="width: 200px; margin-right: 80px;">
                                    {{ __('Login') }}
                                </button>


                            </div>
                        </div>
                    </form>

            </div>
        </div>
    </div>

    <script src="{{asset('login/js/main.js')}}"></script>
@endsection
