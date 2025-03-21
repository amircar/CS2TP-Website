<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/accounts-styles.css"><!-- Accounts page styling -->
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
        <div class="sidebar"><!-- sidebar -->
            <button href="{{ route('account-details') }}">Personal Details</button>
            <button class="active" href="{{ route('password-change') }}">Password Change</button>
            <button href="{{ route('order-history') }}">Order History</button>
            <button href="{{ route('shipping-info') }}">Shipping Information</button>
            <button href="{{ route('payment-info') }}">Payment Information</button>
            <button href="{{ route('payment-info') }}">Settings</button>
        </div>
        <div class="sidebar-triangle" style="top:13.4%;"></div>

        <!-- main box -->
        <div class="password-box">
            <h3 style="font-size: 25px;">Password Change</h3>
            <h3 style="font-size: 14px; color: rgb(130, 0, 0)">Change Your Password</h3>

            <!-- Current Password -->
            <h3 style="font-size: 12px; text-align:left;">Current Password<span class="red-text">*</span></h3>
            <form>
                <input type="text2" style="width:97%; margin-bottom: 30px;" id="account_current_password" name="account_current_password" placeholder="Type Here...">
            </form>

            <!-- New Password -->
            <h3 style="font-size: 12px; text-align:left;">New Password<span class="red-text">* (Must Have at Least 8 Characters)</span></h3>
            <form>
                <input type="text2" style="width:97%; margin-bottom: 30px;" id="account_new_password" name="account_new_password" placeholder="Type Here...">
            </form>

            <!-- Confirm Password -->
            <h3 style="font-size: 12px; text-align:left;">Confirm Password<span class="red-text">* (Should Match New Password)</span></h3>
            <form>
                <input type="text2" style="width:97%; margin-bottom: 30px;" id="account_retype_password" name="account_retype_password" placeholder="Type Here...">
            </form>
        </div>

        <!-- Save button -->
        <button class="save-btn" style="top:75%; left:73%;">SAVE</button>


    </div>    
</div>

</main>

@include('footer')

</body>
</html>