<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/basket.css') }}">
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    <title>Team 47 Basket</title>
    <meta name="description" content="Review your selected items in the basket before checkout.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Team 47 Basket">
    <meta property="og:url" content="">
    <meta property="og:description" content="Review your selected items in the basket before checkout.">
    <meta property="og:locale" content="en_GB">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Team 47">
    <meta property="og:image" content="">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
</head>
<body>
    @include('header')

    <main id="basket-main">
        <div class="basket-container">
            <h2 class="basket-header">Your Basket</h2>

            <!-- Basket Item 1 -->
            <div class="basket-item d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('images/tshirt.jpg') }}" alt="Team 47 T Shirt" class="item-image">
                    <div class="ms-3">
                        <strong>Team 47 T Shirt</strong>
                        <p class="mb-0">Size: M</p>
                        <p class="mb-0">Quantity: 1</p>
                    </div>
                </div>
                <div>
                    <p class="mb-0">£29.99</p>
                    <button type="button" class="btn btn-link btn-remove">Remove</button>
                </div>
            </div>

            <!-- Basket Item 2 -->
            <div class="basket-item d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('images/joggers.jpg') }}" alt="Team 47 Joggers" class="item-image">
                    <div class="ms-3">
                        <strong>Team 47 Joggers</strong>
                        <p class="mb-0">Size: L</p>
                        <p class="mb-0">Quantity: 1</p>
                    </div>
                </div>
                <div>
                    <p class="mb-0">£44.99</p>
                    <button type="button" class="btn btn-link btn-remove">Remove</button>
                </div>
            </div>

            <!-- Total Section -->
            <div class="total-container">
                <strong>Total: £74.98</strong>
            </div>

            <!-- Checkout Button -->
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary">Checkout</a>
            </div>
        </div>
    </main>

    <div class="content-separate"><div class="content-separate-box"></div></div>

    @include('footer')
</body>
</html>