<!DOCTYPE html>
<html lang="en-GB">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>

        <link rel="stylesheet" href={{ asset('css/Single-Product-Style.css') }}>
        <script defer src={{ asset('js/Single-Product-Javascript.js') }}></script>

        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>{{$product->name . " | Team 47"}}</title>
    </head>

    <body>
        @include('header')

        <main id="singleProduct">
            <div id="preview">
                @foreach($product->product_images as $image)
                    <div class="thumb">
                        <img src="{{ asset($image->image_url) }}" alt="{{ $image->alt_text }}">
                    </div>
                @endforeach
            </div>

            <div id="mainView">
                <div class="thumbnail">
                    @foreach($product->product_images as $image)
                        @if($image->is_primary)
                            <img src="{{asset($image->image_url)}}" alt="{{ $image->alt_text }}">
                            @php
                                $found = true;
                            @endphp
                            @break
                        @endif
                    @endforeach
                </div>
            </div>

            <div id="productInfo">
                <h2 class=productName>{{$product->name}}</h1>
                    <h4 class="price">£{{$product->price}}</h4>
                    <h3 style="text-align: left; margin: 0; padding: 10px;">Description</h3>
                    <div class="description-box">
                        <h3>{{$product->description}}</h3>
                    </div>
                    <form action="{{route('add')}}" method="POST">
                        <h4 class="title">SIZE</h4>
                        <div class="sizes">
                            @foreach($product->sizes as $size)
                                <input type="radio" name="size_id" class="size" value="{{$size->id}}" required>{{$size->size}}
                            @endforeach
                        </div>

                        <h4 class="title">Average Rating</h4>
                        <div class="rating">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= round($product->average_rating))
                                    <span class="star filled">&#9733;</span>
                                @else
                                    <span class="star">&#9733;</span>
                                @endif
                            @endfor
                        </div><br>

                        @auth
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <button type="submit" class="Btn1">ADD TO BASKET</button>
                            </form>
                        @else
                            <a href="{{route('login')}}" class="Btn1">ADD TO BASKET</a>
                        @endauth
                    </div>
        </main>

        <section id="reviewsSection">
            <h3>Customer Reviews</h3>
            <div id="reviewsList">
                @foreach($product->reviews as $review)
                    <div class="review">
                        <strong>{{ $review->user->username }}</strong>
                        <div class="rating">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $review->rating)
                                    <span class="star filled">&#9733;</span>
                                @else
                                    <span class="star">&#9733;</span>
                                @endif
                            @endfor
                        </div>
                        <p>{{ $review->review }}</p>
                        <small>Posted on {{ $review->created_at->format('j F, Y') }}</small>
                    </div>
                @endforeach
            </div>

            @auth
                <form id="reviewForm" action="{{ route('reviews.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <select name="rating" id="rating" required>
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="review">Review</label>
                        <textarea name="review" id="review" placeholder="Write your review..." required></textarea>
                    </div>
                    <button type="submit">Submit Review</button>
                </form>
            @else
                <p><a href="{{ route('login') }}">Login</a> to post a review.</p>
            @endauth
        </section>




        <!-- Suggested Items / Item carousel -->
        <section id="suggestedChoices">
            <div style="padding-left: 5%; font-size: 250%;">
                You might also like...
            </div>

            <div style="height: 1px; background-color: black; margin-left: 5%; margin-right: 50%;"></div>
            
            <div id="carouselContainer" style="max-width: 90%;">
                <button class="carousel-button prev" onclick="moveCarousel(-1)">&#10094;</button>
                <div id="carousel">
                    @foreach ($products as $product)
                        @foreach ($product->product_images as $image)
                            <div class="carousel-item">
                                @if ($image->is_primary)
                                    <a href="{{ route('product', ['id' => $product->id]) }}">
                                        <img src={{asset($image->image_url)}} alt="suggested-product">
                                    </a>
                                @endif
                            </div>
                        @endforeach
                    @endforeach
                </div>

                <button class="carousel-button next" onclick="moveCarousel(1)">&#10095;</button>
            </div>
        </section>

        @include('footer')
    </body>
</html>