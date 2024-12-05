<!DOCTYPE html>
<html lang="en-GB">
    <head>
       <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- TODO move to main css -->
        <link rel="stylesheet" href="{{ asset('css/basket.css') }}">

        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        
        <title>Basket | Team 47</title>
    </head>
    <body>
        @include('header')

        <main id="basket-main">
            <div class="basket-container">
                <h2 class="basket-header">Your Basket</h2>


                <!-- TODO link to database -->
                <!-- FIXME move css to main -->
                <!-- FIXME rename classes -->

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

                <!-- TODO calculate total -->
                <div class="total-container">
                    <strong>Total: £74.98</strong>
                </div>

                <!-- Checkout Button -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary">Checkout</a>
                </div>
            </div>
        </main>

        @include('footer')
    </body>
</html>