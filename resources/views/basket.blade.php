<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/basket.css') }}">
    <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Basket | Team 47</title>
</head>

<body>
    @include('header')

    

    <main id="basket-main">
        <div class="basket-container">
            <h2 class="basket-header">Your Basket</h2>

            @php //total cost
                $total = 0
            @endphp

            @foreach ($basket->stocks as $item)           
                <div class="basket-item">
                    <div class="item-details">
                        @foreach ($item->product->product_images as $image)
                            @if ($image->is_primary)
                                <img src="{{ asset($image->image_url) }}" alt="Team 47 T Shirt" class="item-image">
                            @endif
                        @endforeach

                        <div class="item-info">
                            <strong>{{$item->product->name}}</strong>
                            <p class="mb-0">Size: {{$item->size->size}}</p>
                            <p class="mb-0">Quantity: {{$item->pivot->quantity}}</p>
                        </div>
                    </div>

                    <div class="item-actions">
                        @php // cost of item multiplied by quantity added to total cost
                            $total += $item->product->price * $item->pivot->quantity
                        @endphp

                        <p class="item-price">£{{$item->product->price}}</p>

                        <div class="button-group">
                            <form action="{{route('add')}}" method="POST" class="inline-form">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$item->product_id}}">
                                <input type="hidden" name="size_id" value="{{$item->size_id}}">
                                <button type="submit" class="btn btn-link btn-action">Add</button>
                            </form>

                            <form action="{{route('remove')}}" method="POST" class="inline-form">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$item->product_id}}">
                                <input type="hidden" name="size_id" value="{{$item->size_id}}">
                                <button type="submit" class="btn btn-link btn-action">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="total-container">
                <strong>Total: £{{$total}}</strong>
            </div>

            <!-- Checkout Button -->
            <div class="text-center mt-4">
                <form action="checkout" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$basket->user_id}}">
                    <input type="hidden" name="price" value="{{$total*100}}">
                    <button type="submit" class="btn btn-primary">Checkout</button>
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