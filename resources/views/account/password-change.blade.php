<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/accounts-styles.css"><!-- Accounts page styling -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Account</title>
</head>

<body>

    @include('header')
    <main id="aboutus-box">
        <div class="accountbox">
            <div class="accounttitle">
                <h2 style="font-size: 400%; justify-content: center;">Account Details</h2>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="logout-btn" type="submit">
                        <div class="icon-container">
                            &#x21B6; <!-- Logout symbol (↶) -->
                        </div>
                        LOGOUT
                    </button>
                </form>
            </div>
            <div class="seperating-box">
                <div class="sidebar"><!-- sidebar -->
                    <a href="{{ route('account-details') }}"><button href="{{ route('account-details') }}">Personal
                            Details</button></a>
                    <button class="active">Password Change</button>
                    <a href="{{ route('order-history') }}"><button>Order History</button></a>
                    <a href="{{ route('shipping') }}"><button>Shipping Information</button></a>
                    <a href="{{ route('settings') }}"><button>Settings</button></a>
                </div>
                <div class="sidebar-triangle" style="top:13.4%;"></div>

                <form action="{{ route('update-password') }}" method="POST">

                    @csrf
                    @method('PUT')
                    <!-- main box -->
                    <div class="password-box">
                        <h3 style="font-size: 25px;">Password Change</h3>
                        <h3 style="font-size: 14px; color: rgb(130, 0, 0)">Change Your Password</h3>

                        <!-- Current Password -->
                        <h3 style="font-size: 12px; text-align:left;">Current Password<span class="red-text">*</span>
                        </h3>

                        <input type="password" style="width:97%; margin-bottom: 30px;" id="account_current_password"
                            name="current_password" placeholder="Type Here..." required>


                        <!-- New Password -->
                        <h3 style="font-size: 12px; text-align:left;">New Password<span class="red-text">* (Must Have at
                                Least 8 Characters)</span></h3>

                        <input type="password" style="width:97%; margin-bottom: 30px;" id="account_new_password"
                            name="new_password" placeholder="Type Here..." required minlength="8">


                        <!-- Confirm Password -->
                        <h3 style="font-size: 12px; text-align:left;">Confirm Password<span class="red-text">* (Should
                                Match
                                New Password)</span></h3>

                        <input type="password" style="width:97%; margin-bottom: 30px;" id="account_retype_password"
                            name="retype_password" placeholder="Type Here..." required>

                    </div>
                    <!-- Save button -->
                    <button class="save-btn" style="top:75%; left:73%;" type="submit">SAVE</button>
                </form>

            </div>
        </div>

    </main>

    @include('footer')

</body>

    @if(session('message'))
        <div class="alert alert-danger">
            <script>
                window.onload = function () {
                alert('{{ session('message') }}')
                    
                }
            </script>
        </div>
    @endif

</html>