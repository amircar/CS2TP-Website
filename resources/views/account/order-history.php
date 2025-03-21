<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/accounts-styles.css"> <!-- Accounts page styling -->
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
        <div class="sidebar"> <!-- Sidebar -->
            <button href="{{ route('account-details') }}">Personal Details</button>
            <button href="{{ route('password-change') }}">Password Change</button>
            <button class="active" href="{{ route('order-history') }}">Order History</button>
            <button href="{{ route('shipping-info') }}">Shipping Information</button>
            <button href="{{ route('payment-info') }}">Payment Information</button>
            <button href="{{ route('payment-info') }}">Settings</button>
        </div>
        <div class="sidebar-triangle" style="top:26.4%;"></div>

        <!-- Past Orders box -->
        <div class="account-info-box" style="top:0; left:30%; height: 85%; width: 65%; overflow-y: auto; overflow-x: hidden;">
            <h3 style="font-size: 25px;">Previous Orders</h3>
            <h3 style="font-size: 14px; color: rgb(130, 0, 0)">View Your Past Orders Here</h3>
            <!-- orders -->
            <div class="info-box-input" style="margin-bottom: 15px; height: 23%; width: 98%; padding-top:30px; padding-left:15px;"><p>Order 1</p></div>
            <div class="info-box-input" style="margin-bottom: 10px; height: 23%; width: 98%; padding-top:30px; padding-left:15px;"><p>Order 2</p></div>
            <div class="info-box-input" style="margin-bottom: 10px; height: 23%; width: 98%; padding-top:30px; padding-left:15px;"><p>Order 3</p></div>
            <div class="info-box-input" style="margin-bottom: 10px; height: 23%; width: 98%; padding-top:30px; padding-left:15px;"><p>Order 4</p></div>
            <div class="info-box-input" style="margin-bottom: 10px; height: 23%; width: 98%; padding-top:30px; padding-left:15px;"><p>Order 5</p></div>
        </div>

    </div>
  
</div>

</main>
@include('footer')
</body>
</html>