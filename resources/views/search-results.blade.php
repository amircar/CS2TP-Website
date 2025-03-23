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

        <section id="product-search-introduction">
            <!-- TODO search results description includes search input -->
            <h2 id="search-results-description">SEARCH FOR ""</h2>
        </section>

        <div class="content-separate"><div class="content-separate-box"></div></div>

        <main id="product-search-main">
            <aside id="product-search-filters">
                <h3>FILTERS</h3>

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
                <div id="product-collection">
                    <ul id="product-collection-list">
                        @foreach ($products as $product)
                            @include('product-card' , ['product' => $product])
                        @endforeach
                    </ul>
                </div>
            </section>
        </main>

        @include('footer')
    </body>
</html>