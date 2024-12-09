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

            @if(session('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
            @endif

        <main id="basket-main">
            <div class="basket-container">
                <h2 class="basket-header">Your Basket</h2>

                @php //total cost
                    $total = 0
                @endphp

                @foreach ($basket->stocks as $item)           
                    <div class="basket-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            @foreach ($item->product->product_images as $image)
                                @if ($image->is_primary)
                                    <img src="{{ asset($image->image_url) }}" alt="Team 47 T Shirt" class="item-image">
                                @endif
                            @endforeach

                            <div class="ms-3">
                                <strong>{{$item->product->name}}</strong>
                                <p class="mb-0">Size: {{$item->size->size}}</p>
                                <p class="mb-0">Quantity: {{$item->pivot->quantity}}</p>
                            </div>
                        </div>

                        <div>
                            @php // cost of item multiplied by quantity added to total cost
                                $total += $item->product->price * $item->pivot->quantity
                            @endphp

                            <p class="mb-0">£{{$item->product->price}}</p>

                            <form action="{{route('add')}}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$item->product_id}}">
                                <input type="hidden" name="size_id" value="{{$item->size_id}}">
                                <button type="submit" class="btn btn-link btn-remove">Add</button>
                            </form>

                            <form action="{{route('remove')}}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$item->product_id}}">
                                <input type="hidden" name="size_id" value="{{$item->size_id}}">
                                <button type="submit" class="btn btn-link btn-remove">Remove</button>
                            </form>

                        </div>
                    </div>
                @endforeach

                <div class="total-container">
                    <strong>Total: £{{$total}}</strong>
                </div>

                <!-- Checkout Button -->
                <div class="text-center mt-4">
                    <form action="checkout"method="POST">
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
</html>