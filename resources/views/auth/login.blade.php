<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>TEAM 47 LOGIN</title>
</head>
<body>
        <!-- Top section login form -->
        @include('header')
        <div class="left-section">
            <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">{{ __('Email Address') }} *</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }} *</label>
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
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
    </div>
</div>
</div>


                <button type="submit" class="btn btn-primary">{{ __('Sign In') }}</button>
                @if (Route::has('password.request'))
                    <a class="forgot-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                @endif
            </form>
        </div>

        <!-- Bottom section, where the register info is -->
<div class="bottom-section">
    <h2>Haven't joined yet?</h2>
    <ul>
        <li>• Sign up and take your basket on any device.</li>
        <li>• Enjoy exclusive offers and discounts only available to team members.</li>
        <li>• Take advantage of our free shipping on all products.</li>
    </ul>
    <button type="button" class="btn btn-primary" onclick="window.location='{{ route('register') }}'">{{ __('Register Now') }}</button>
</div>
    </div>
    @include('footer')
</body>
</html>
