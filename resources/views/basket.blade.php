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

            @if (!$basket or $basket->stocks->isEmpty())
                <a class="basket-empty" href = "{{route ('home')}}">{{ __('Your basket is empty, find some items here') }}</a>
            @else
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
            @endif
            
        </div>
    </main>

    <main id="basket-main">
        <h2 class="basket-header">Your Previous Orders</h2>
        @foreach ($previous as $order)
            @php //total cost
                $total = 0
            @endphp
            <div class="basket-container">
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
    </main>

    @include('footer')
</body>
</html>