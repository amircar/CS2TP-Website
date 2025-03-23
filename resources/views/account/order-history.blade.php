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
                    <div class="sidebar"> <!-- Sidebar -->
                        <a href="{{ route('account-details') }}"><button href="{{ route('account-details') }}">Personal
                                Details</button></a>
                        <a href="{{ route('password-change') }}"><button>Password Change</button></a>
                        <button class="active">Order History</button>
                        <a href="{{ route('shipping') }}"><button>Shipping Information</button></a>
                        <a href="{{ route('settings') }}"><button>Settings</button></a>
                    </div>
                    <div class="sidebar-triangle" style="top:26.4%;"></div>

                    <!-- Past Orders box -->
                    <div class="account-info-box"
                        style="top:0; left:30%; height: 85%; width: 65%; overflow-y: auto; overflow-x: hidden;">
                        <h3 style="font-size: 25px;">Previous Orders</h3>
                        <h3 style="font-size: 14px; color: rgb(130, 0, 0)">View Your Past Orders Here</h3>
                        @foreach ($previous as $order)
                            @php //total cost
                                $total = 0
                            @endphp
                            <div class="past-order-container">
                                <p class="order_date">Order From: {{ date('d/m/Y', strtotime($order->order_date)) }}</p>
                                @foreach ($order->items as $order_item)
                                    <div class="basket-item">
                                        <div class="item-details">
                                            @foreach ($order_item->stock->product->product_images as $image)
                                                @if ($image->is_primary)
                                                    <img src="{{ asset($image->image_url) }}" alt="Team 47 T Shirt" class="item-image">
                                                @endif
                                            @endforeach

                                            <div class="item-info">
                                                <strong>{{$order_item->stock->product->name}}</strong>
                                                <p class="mb-0">Size: {{$order_item->stock->size->size}}</p>
                                                <p class="mb-0">Quantity: {{$order_item->quantity}}</p>
                                            </div>
                                        </div>

                                        <div class="item-actions">

                                            @php // cost of item multiplied by quantity added to total cost
                                                $total += $order_item->stock->product->price * $order_item->quantity
                                            @endphp

                                            <p class="item-price">£{{$order_item->stock->product->price}}</p>

                                        </div>
                                    </div>
                                @endforeach

                                <div class="total-container">
                                    <strong>Total: £{{$total}}</strong><br>
                                    <strong>Order Status: 
                                        <span class="{{ $order->status === "Delivered" ? "delivered" : "non-delivered" }}">
                                            {{$order->status}}
                                        </span>
                                    </strong>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>

        </main>
        @include('footer')
    </body>
</html>