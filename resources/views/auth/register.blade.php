<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
        <!-- FIXME js not working on register page -->
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Team 47 Registration</title>
    </head>

    <body>
        @include('header')

        <div id="registration-wrapper">
            <main id="registration-form">
                <h2>CREATE AN ACCOUNT</h2>
                <p>(All fields marked with a star<span style="color: rgb(128, 0, 0)">*</span> are required.)</p>
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="username">{{ __('Username') }}</label>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="first_name">{{ __('First Name') }}</label>
                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name">
                        
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="last_name">{{ __('Last Name') }}</label>
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">
                        
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </main>

            <section id="login-prompt">
                <h3>ALREADY HAVE AN ACCOUNT?</h3>
                <ul>
                    <li>Sign in and take your basket on any device.</li>
                    <li>Enjoy your own, exclusive offers and discounts only available to <b>TEAM</b> members.</li>
                    <li>Take advantage of our free shipping on all products.</li>
                    <li>Browse our signature collections and checkout with our products.</li>
                </ul>
                <a href="{{ route('login') }}">
                    <button type="button" class="btn btn-primary"">{{ __('Go to login') }}</button>
                </a>
            </section>
        </div>

        @include('footer')
    </body>
</html>