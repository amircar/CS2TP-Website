<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <!-- TODO search results title including search input -->
        {{-- TODO search results title including page --}}
        <title>Results for ' ' | Team 47</title>
        <!-- TODO if empty, use alternative title e.g.: -->
        <!-- <title>Shop for Clothing | Team 47</title> -->
    </head>

    <body>
        @include('header')

        <!-- FIXME temp name -->
        <section id="product-search-introduction">
            <!-- TODO category pathway -->
            <p>CATEGORY PATHWAY</p>
            <p>SEARCH RESULT TITLE/CATEGORY TITLE</p>
        </section>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <main id="product-search-main">
            {{-- collection of filters --}}
            <aside id="product-search-filters">
                
                <!-- TODO reset filters button code -->
                <button id="search-filter-reset">RESET FILTERS</button>

                <!-- TODO button to expand/minimise "aside" -->


                <div>
                    {{-- category --}}
                    {{-- opens sub menus --}}
                    {{--  --}}
                </div>



                {{-- DROP-DOWN MENUS --}}
                <div class="product-search-filter">
                    <p>COLOURS:</p>

                    <!-- TODO connect to database table and display list of colours -->
                    <!-- TODO display: (# of products in category) -->
                </div>

                <div class="product-search-filter">
                    <p>SIZES:</p>

                    <!-- TODO connect to database table and display list of sizes -->
                    <!-- TODO display: (# of products in category) -->
                </div>

                <div class="content-separate"><div class="content-separate-box"></div></div>

                <div class="product-search-filter">
                    <p>PRICE RANGE:</p>

                    <div>
                        <!-- TODO 2 input boxes so can type price instead of using slider -->
                        <!-- TODO slider for price range -->
                        {{-- 0 - 1000+ --}}
                    </div>
                </div>

                <div class="product-search-filter">
                    <p>RATING:</p>

                    <div>
                        <!-- TODO options for each star (1+ to 4+) -->
                    </div>
                </div>
            </aside>

            {{-- (container) collection of products --}}
            <section>

                <!-- TODO sorting/display of products in search results -->
                <div>
                    {{-- for sorting (e.g. by price) --}}
                    <button> {{-- for changing ascending/descending order --}} </button>
                </div>
                <div>
                    {{-- for displaying option for how many products per page (e.g. 25 or 50) --}}
                </div>

                {{-- for statement to display each product as a card --}}
                {{-- if empty, return message e.g. "No items found" --}}
                <div>
                    <ul id="product-collection">
                        <li class="product-card">
                            <a href="">
                                <img src="" alt="product-image">

                                <p class="product-title">TITLE title TITLE title TITLE title TITLE title TITLE title TITLE title TITLE title TITLE title TITLE titleTITLE title</p>
                                <p class="product-price">£50.55</p>
                                <p class="product-size">Sizes: </p>
                                <!-- TODO add colours to product card -->
                                <p class="product-colour">Colours: </p>
                            </a>

                            <!-- TODO add to wishlist button (heart) -->
                            <button class="small-wishlist-button"><div></div></button>

                        </li>



                        <!-- TODO remove when connected to database -->
                        <li class="product-card">
                            <a href="">
                                <img src="" alt="product-image">

                                <p class="product-title">title TITLE title TITLE</p>
                                <p class="product-price">£50.55</p>
                                <p class="product-size">Sizes: </p>
                                <!-- TODO add colours to product card -->
                                <p class="product-colour">Colours: </p>
                            </a>

                            <button class="small-wishlist-button"></button>
                        </li>
                        <li class="product-card">
                            <a href="">
                                <img src="" alt="product-image">

                                <p class="product-title">title TITLE title TITtle TITLE title TITtle TITLE title TITLE</p>
                                <p class="product-price">£</p>
                                <p class="product-size">Sizes: </p>
                                <!-- TODO add colours to product card -->
                                <p class="product-colour">Colours: </p>
                            </a>
                        </li>
                        <li class="product-card">
                            <a href="">
                                <img src="" alt="product-image">

                                <p class="product-title"></p>
                                <p class="product-price">£</p>
                                <p class="product-size">Sizes: </p>
                                <!-- TODO add colours to product card -->
                                <p class="product-colour">Colours: </p>
                            </a>
                        </li>
                        <li class="product-card">
                            <a href="">
                                <img src="" alt="product-image">

                                <p class="product-title"></p>
                                <p class="product-price">£</p>
                                <p class="product-size">Sizes: </p>
                                <!-- TODO add colours to product card -->
                                <p class="product-colour">Colours: </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </main>

        @include('footer')
    </body>
</html>