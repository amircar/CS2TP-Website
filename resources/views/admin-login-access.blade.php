<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Admin Login Access</title>
    </head>

    <body>
        @include('header')

        <div id="login-form">
            <h2>ACCESS ADMIN ACCOUNT LOGIN</h2>
            <p>(Enter the Admin Password in order to Login to an Admin Account)</p>

            <form method="POST" action="{{ route('admin-login-access') }}">
                @csrf
                <div class="form-group">
                    <label for="password">{{ __('Admin Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group remember-me">
                    <div class="form-group remember-me">
                        <div class="remember-me-container">
                            <input class="form-check-input custom-checkbox" type="checkbox" name="remember" id="remember-checkbox" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember-checkbox">{{ __('Remember Me') }}</label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">{{ __('Access') }}</button>
            </form>
        </div>
    </body>
</html>
