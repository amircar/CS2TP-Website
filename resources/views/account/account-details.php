<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/accounts-styles.css">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Account</title>
    </head>

<body>
@include('header')
<main id="aboutus-box">
<div class="accountbox">
    <div class="accounttitle">
        <h2 style="font-size: 400%; justify-content: center;">Account Details</h2>
        <button class="logout-btn" href="{{ route('index') }} ">
            <div class="icon-container">
            &#x21B6; <!-- Logout symbol (↶) -->
            </div>
            LOGOUT
        </button>
    </div>
    <div class="seperating-box">
        <div class="sidebar">
            <button class="active" href="{{ route('account-details') }}">Personal Details</button>
            <button href="{{ route('password-change') }}">Password Change</button>
            <button href="{{ route('order-history') }}">Order History</button>
            <button href="{{ route('shipping-info') }}">Shipping Information</button>
            <button href="{{ route('payment-info') }}">Payment Information</button>
            <button href="{{ route('payment-info') }}">Settings</button>
        </div>
        <div class="sidebar-triangle"></div>
        <div class="account-info-box" style="top:0; left:31%;">
            <div class="info-box-title"><h2 style="font-size: 17px;">Username</h2></div>
            <form>
                <input type="text2" id="account_username" name="account_username" placeholder="Username">
            </form>
        </div>

        <div class="account-info-box" style="top:28%; left:31%;">
            <div class="info-box-title"><h2 style="font-size: 17px;">First Name</h2></div>
            <form>
                <input type="text2" id="account_firstname" name="account_firstname" placeholder="First Name">
            </form>
        </div>

        <div class="account-info-box" style="top:56%; left:31%;">
            <div class="info-box-title"><h2 style="font-size: 17px;">Last Name</h2></div>
            <form>
                <input type="text2" id="account_lastname" name="account_lastname" placeholder="Last Name">
            </form>
        </div>

        <div class="account-info-box" style="top:0; left:68%;">
            <div class="info-box-title"><h2 style="font-size: 17px;">Email Address</h2></div>
            <form>
                <input type="text2" id="account_email" name="account_email" placeholder="Email Address">
            </form>
        </div>
        
            <button class="save-btn" style="top:75%; left:73%;">SAVE</button>

    </div>
   
</div>
</main>

@include('footer')
</body>
</html>