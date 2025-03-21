<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/accounts-styles.css"> <!-- Accounts styling page -->
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
            <button href="{{ route('password-change') }}">Password Change</button>
            <button href="{{ route('order-history') }}">Order History</button>
            <button href="{{ route('shipping-info') }}">Shipping Information</button>
            <button class="active" href="{{ route('payment-info') }}">Payment Information</button>
            <button href="{{ route('payment-info') }}">Settings</button>
        </div>
        <div class="sidebar-triangle" style="top:53%;"></div>

        <!-- Paypal -->
        <div class="paymentcard1" style="top:0; left:35%;"></div>

        <!-- Add Card -->
        <div class="paymentcard2" style="top:0; left:50%;">
            <div class="paymentinfo-title2" style="top: 10%; left: 40%;">+</div>
            <div class="paymentinfo-title2" style="top: 63%; left: 25%; font-size:15px;">Add Card</div>
        </div>

        <!-- Card Details -->
        <div class="paymentinfo-box" style="top:20%; left:35%;">
            <div class="paymentinfo-title2" style="top:2%; left:30%;">Card Details</div>
            <div class="paymentinfo-box2" style="top:20%; left:4%;">
                <form><!-- Card Number -->
                    <input type="text2" style="font-size:20px; width: 95%; padding-top: 20px; padding-bottom: 20px;" id="account_cardnumber" name="account_cardnumber" placeholder="**** **** **** 1234">
                </form>
                <div class="paymentinfo-title" style="top:3%; left:10%; width:20%;">Card Number</div>

                <!-- MM -->
                <div class="paymentinfo-box2" style="top:45%; left:0%; width: 100%; height:40%; display: flex; gap: 0px;">
                    <form>
                        <input type="text2" style="font-size:20px; width: 60%; padding-top: 20px; padding-bottom: 20px;" id="account_cardmonth" name="account_cardmonth" placeholder="05">
                    </form>
                    <div class="paymentinfo-title" style="top:8%; left:5%; width: 6%;">MM</div>

                    <!-- YY -->
                    <form>
                        <input type="text2" style="font-size:20px; width: 60%; padding-top: 20px; padding-bottom: 20px;" id="account_cardyear" name="account_cardyear" placeholder="28">
                    </form>
                    <div class="paymentinfo-title" style="top:8%; left:38%; width: 4%;">YY</div>

                    <!-- CVV -->
                    <form>
                        <input type="text2" style="font-size:20px; width: 78%; padding-top: 20px; padding-bottom: 20px;" id="account_cardCVV" name="account_cardCVV" placeholder="709">
                    </form>
                    <div class="paymentinfo-title" style="top:8%; left:70%; width: 7%;">CVV</div>
                </div>
            </div>
        </div>

        <!-- Save button -->
        <button class="save-btn" style="top:75%; left:73%;">SAVE</button>
    </div>   
</div>

</main>

@include('footer')

</body>
</html>