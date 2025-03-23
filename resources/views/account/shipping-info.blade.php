<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/accounts-styles.css"><!-- accounts page styling -->
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
                    <a href="{{ route('password-change') }}"><button>Password Change</button></a>
                    <a href="{{ route('order-history') }}"><button>Order History</button></a>
                    <button class="active">Shipping Information</button>
                    <a href="{{ route('payment-info') }}"><button>Payment Information</button></a>
                    <a href="{{ route('settings') }}"><button>Settings</button></a>
                </div>
                <div class="sidebar-triangle" style="top:39.8%;"></div>

                <form action="{{ route('update-shipping') }}" method="POST">
                    @csrf
                    <!-- Address Line 1 -->
                    <div class="account-info-box" style="top:0; left:31%;">
                        <div class="info-box-title">
                            <h2 style="font-size: 17px;">Address Line 1</h2>
                        </div>
                        <input type="text" id="account_address1" name="address1" placeholder="Address Line 1" required value="{{ $address-> address_line1 ?? ''}}">
                    </div>

                    <!-- address line 2 -->
                    <div class="account-info-box" style="top:28%; left:31%;">
                        <div class="info-box-title">
                            <h2 style="font-size: 17px;">Address Line 2</h2>
                        </div>
                        <input type="text" id="account_address2" name="address2" placeholder="Address Line 2" value="{{ $address-> address_line2 ?? ''}}">
                    </div>

                    <!-- town/city -->
                    <div class="account-info-box" style="top:56%; left:31%;">
                        <div class="info-box-title">
                            <h2 style="font-size: 17px;">Town/City</h2>
                        </div>
                        <input type="text" id="account_town/city" name="city" placeholder="Town/City" required value="{{ $address-> city ?? ''}}">
                    </div>

                    <!-- postcode -->
                    <div class="account-info-box" style="top:0; left:68%;">
                        <div class="info-box-title">
                            <h2 style="font-size: 17px;">Postcode</h2>
                        </div>
                        <input type="text" id="account_postcode" name="postcode" placeholder="Postcode" required value="{{ $address-> postcode ?? ''}}">
                    </div>

                    <!-- country -->
                    <div class="account-info-box" style="top:28%; left:68%;">
                        <div class="info-box-title">
                            <h2 style="font-size: 17px;">Country</h2>
                        </div>
                        <input type="text" id="account_country" name="country" placeholder="Country" required value="{{ $address-> country ?? ''}}">
                    </div>

                    <!-- save button -->
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