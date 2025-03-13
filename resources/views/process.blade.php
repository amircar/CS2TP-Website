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
<!-- Section for Placed orders -->
    <main id="basket-main">
        <h2 class="basket-header">Placed Orders</h2>
        @foreach ($placed as $order)
            @php //total cost
                $total = 0
            @endphp
            <div class="basket-container">
                <p class="order_date">Order From: {{ $order->user->email }}</p>
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
                <!-- change the status of the order from placed to outgoing -->
                <form action="processing" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$order->id}}">
                    <input type="hidden" name="status" value="Outgoing">
                    <button type="submit" class="btn btn-primary">Change to Outgoing</button>
                </form>
            
            </div>
        @endforeach
    </main>

    <!-- Section for Outgoing Orders -->
    <main id="basket-main">
        <h2 class="basket-header">Outgoing Orders</h2>
        @foreach ($outgoing as $order)
            @php //total cost
                $total = 0
            @endphp
            <div class="basket-container">
                <p class="order_date">Order From: {{ $order->user->email }}</p>
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
                <form action="processing" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$order->id}}">
                    <input type="hidden" name="status" value="Delivered">
                    <button type="submit" class="btn btn-primary">Change to Delivered</button>
                </form>
            </div>
        @endforeach
    </main>

    <main id="basket-main">
        <h2 class="basket-header">Delivered Orders</h2>
        @foreach ($delivered as $order)
            @php //total cost
                $total = 0
            @endphp
            <div class="basket-container">
                <p class="order_date">Order From: {{ $order->user->email }}</p>
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