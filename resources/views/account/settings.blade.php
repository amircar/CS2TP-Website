<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                <div class="sidebar"> <!-- sidebar -->
                    <a href="{{ route('account-details') }}"><button href="{{ route('account-details') }}">Personal
                            Details</button></a>
                    <a href="{{ route('password-change') }}"><button>Password Change</button></a>
                    <a href="{{ route('order-history') }}"><button>Order History</button></a>
                    <a href="{{ route('shipping') }}"><button>Shipping Information</button></a>
                    <a href="{{ route('payment-info') }}"><button>Payment Information</button></a>
                    <button class="active">Settings</button>
                </div>
                <div class="sidebar-triangle" style="top:66.05%;"></div>

                <!-- Visual Accessibility -->
                <div class="account-info-box" style="top:0; left:31%;">
                    <div class="info-box-title">
                        <h2 style="font-size: 17px; margin-bottom:80px;">Visual Accessibility</h2>
                    </div>
                    <div class="info-box-input" style="text-align: center; padding: 10px; width:90%; height:20%;">Text
                        Enlargement <input type="checkbox"></div>
                </div>

                <!-- Delete Account -->
                <div class="account-info-box" style="top:28%; left:31%;">
                    <div class="info-box-title">
                        <h2 style="font-size: 17px;">Delete Account</h2>
                    </div>
                    <button class="info-box-input2">Delete</button>
                </div>

                <!-- save button -->
                <button class="save-btn" style="top:75%; left:73%;">SAVE</button>

            </div>

        </div>

    </main>

    @include('footer')

</body>

</html>