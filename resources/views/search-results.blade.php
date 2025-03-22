<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <!-- TODO search results title including search input -->
        <title>Results for "" | Team 47</title>
        <!-- TODO if empty, use alternative title e.g.: -->
        <!-- <title>Browse all Clothing | Team 47</title> -->
    </head>

    <body>
        @include('header')

        <!-- TODO remove (old view) -->

        <!--
        <main id="home-main">
        </main>

        <section id="featured-products-list">
            <h2>SEARCHED PRODUCTS</h2>
            <ul class="products-list">
                {{-- @foreach ($products as $product)
                    @include('product-card' , ['product' => $product])
                @endforeach --}}
            </ul>
        </section>
        -->


        <section id="product-search-introduction">
            <!-- TODO category pathway -->
            <p>CATEGORY PATHWAY E.g.:</p>
            <p>Home/Men/Shirts</p>
            <!-- TODO search results description includes search input -->
            <h2 id="search-results-description">SEARCH FOR ""</h2>
        </section>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <main id="product-search-main">
            <!-- TODO make sticky -->
            {{-- collection of filters --}}
            <aside id="product-search-filters">
                
                <!-- TODO reset filters button code -->
                <button id="search-filter-reset">RESET FILTERS</button>

                <!-- TODO button to expand/minimise "aside" -->
                <div><button id="search-filter-view-button"></button></div>

                <div>
                    {{-- category --}}
                    {{-- opens sub menus --}}
                    {{--  --}}
                </div>



                {{-- DROP-DOWN MENUS --}}
                <div class="product-search-filter">
                    <p>COLOURS:</p>

                    <!-- TODO connect to database table and display list of colours -->
                    <!-- TODO checkboxes & display: (# of products in category) -->
                    <ul class="product-search-filter-list">
                        <li>
                            <label><input type="checkbox">Red (5)</label>
                        </li>
                        <li>
                            <label><input type="checkbox">Blue (5)</label>
                        </li>
                        <li>
                            <label><input type="checkbox">Green (5)</label>
                        </li>
                    </ul>
                </div>

                <div class="product-search-filter">
                    <p>SIZES:</p>

                    <!-- TODO connect to database table and display list of sizes -->
                    <!-- TODO display: (# of products in category) -->
                    <ul class="product-search-filter-list">
                        <li>
                            <label><input type="checkbox">Small (5)</label>
                        </li>
                        <li>
                            <label><input type="checkbox">Medium (5)</label>
                        </li>
                        <li>
                            <label><input type="checkbox">Large (5)</label>
                        </li>
                    </ul>
                </div>

                <div class="content-separate"><div class="content-separate-box"></div></div>

                <div class="product-search-filter">
                    <p>PRICE RANGE:</p>

                    <div>
                        <!-- TODO 2 input boxes so can type price instead of using slider -->
                        <!-- TODO slider for price range -->
                        {{-- 0 - 1000+ --}}

                    </div>

                    <ul class="product-search-filter-list">
                        <li>
                            <label><input type="checkbox">Under £10 (5)</label>
                        </li>
                        <li>
                            <label><input type="checkbox">Under £25 (5)</label>                        </li>
                        </li>
                            <label><input type="checkbox">Under £50 (5)</label>                        </li>
                        <li>
                            <label><input type="checkbox">Under £100 (5)</label>   
                        </li>
                        <li>
                            <label><input type="checkbox">Under £250 (5)</label>   
                        </li>
                        <li>
                            <label><input type="checkbox">Under £500 (5)</label>   
                        </li>
                    </ul>
                </div>

                <div class="product-search-filter">
                    <p>RATING:</p>

                    <div>
                        <ul class="product-search-filter-list">
                            <li>
                                <label><input type="checkbox">4 stars & up (5)</label>
                            </li>
                            <li>
                                <label><input type="checkbox">3 stars & up (5)</label>
                            </li>
                            <li>
                                <label><input type="checkbox">2 stars & up (5)</label>
                            </li>
                            <li>
                                <label><input type="checkbox">1 star & up (5)</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>

            <section id="product-collection-container">
                <div id="product-collection-sort">
                    {{-- for sorting (e.g. by price) --}}
                    <button> {{-- for changing ascending/descending order --}} </button>
                </div>
                <div id="product-collection-view">
                    {{-- for displaying option for how many products per page (e.g. 25 or 50) --}}
                </div>

                {{-- for statement to display each product as a card --}}
                {{-- if empty, return message e.g. "No items found" --}}


                <!--FIXME bug with image causing positional problems-->
                <div id="product-collection">
                    <ul id="product-collection-list">
                        @foreach ($products as $product)
                        <li class="product-card">
                            <a href="product/{{$product->id}}">
                                {{$found = false}}
                                @foreach($product->product_images as $image)
                                    @if($image->is_primary) 
                                        <img src="{{asset($image->image_url)}}" alt="{{ $image->alt_text }}">
                                        @php
                                            $found = true;
                                        @endphp
                                        @break <!-- ends loop early to reduce time complexity -->
                                    @endif
                                @endforeach

                                <!-- if primary image is not found, add empty image to reserve space -->
                                @if($found == false)
                                    <img src="" alt="product-image">
                                @endif

                                {{$productSizes = ""}}
                                @foreach($product->sizes as $size)
                                    @php
                                        $productSizes .= $size->size . " ";
                                    @endphp
                                @endforeach 
                                <p class="product-title">{{$product->name}}</p>
                                <p class="product-price">£ {{$product->price}}</p>
                                <p class="product-size">Sizes: {{$productSizes}}</p>
                                <!-- TODO add colours to product card -->
                                <p class="product-colour">Colours: </p>
                            </a>

                            <!-- TODO resize heart in wishlist button -->
                            <button class="add-to-wishlist-shortcut">
                                <svg width="40" height="40" viewBox="0 0 40 40">
                                    <path fill="none" stroke="black" d="M 20 12 C 18 14 12 18 12 18 C 12 18 6 14 4 12 C 0 8 0 4 4 2 C 8 0 10 2 12 4 C 14 2 16 0 20 2 C 24 4 24 8 20 12"></path>
                                </svg>
                            </button>
                        </li>
                        @endforeach
                        
                    </ul>
                </div>
            </section>
        </main>

        @include('footer')
    </body>
</html>