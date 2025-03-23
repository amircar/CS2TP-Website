<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/accounts-styles.css"> <!-- Accounts page styling -->
    <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Account</title>
</head>

<body>
    @include('header')
    @if(auth()->user()->isAdmin)
        <div class="admin-controls">
            <a href="{{ route('process') }}" class="admin-btn">Process Orders</a>
            <a href="{{ route('stocks') }}" class="admin-btn">Stock Levels</a>
            <a href="{{ route('new') }}" class="admin-btn">Add New Stock</a>
        </div>
    @endif
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
            <div class="seperating-box"> <!-- Sidebar -->
                <div class="sidebar">
                    <button class="active">Personal Details</button>
                    <!-- Personal details page -->
                    <a href="{{ route('password-change') }}"><button>Password Change</button></a>
                    <a href="{{ route('order-history') }}"><button>Order History</button></a>
                    <a href="{{ route('shipping') }}"><button>Shipping Information</button></a>
                    <a href="{{ route('settings') }}"><button>Settings</button></a>
                </div>
                <div class="sidebar-triangle"></div>

                <form action={{ route("update-details")}} method="POST">

                    @csrf
                    @method('PUT')
                    <!-- Username -->
                    <div class="account-info-box" style="top:0; left:31%;">
                        <div class="info-box-title">
                            <h2 style="font-size: 17px;">Username</h2>
                        </div>

                        <input type="text" id="account_username" name="username" placeholder="Username"
                            value="{{ $user->username }}" required>

                    </div>

                    <!-- First Name -->
                    <div class="account-info-box" style="top:28%; left:31%;">
                        <div class="info-box-title">
                            <h2 style="font-size: 17px;">First Name</h2>
                        </div>

                        <input type="text" id="account_firstname" name="first_name" placeholder="First Name"
                            value="{{ $user->first_name }}" required>

                    </div>

                    <!-- Last Name -->
                    <div class="account-info-box" style="top:56%; left:31%;">
                        <div class="info-box-title">
                            <h2 style="font-size: 17px;">Last Name</h2>
                        </div>

                        <input type="text" id="account_lastname" name="last_name" placeholder="Last Name"
                            value="{{ $user->last_name }}" required>

                    </div>

                    <!-- Email Address -->
                    <div class="account-info-box" style="top:0; left:68%;">
                        <div class="info-box-title">
                            <h2 style="font-size: 17px;">Email Address</h2>
                        </div>

                        <input type="email" id="account_email" name="email" placeholder="Email Address"
                            value="{{ $user->email }}" required>

                    </div>

                    <!-- Save Button -->
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