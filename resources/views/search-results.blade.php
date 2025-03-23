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
                <form>
                    <h3>FILTERS</h3>

                    <div class="product-search-filter">
                        <p>SIZES:</p>

                        <!-- TODO connect to database table and display list of sizes -->
                        <!-- TODO display: (# of products in category) -->
                        <ul class="product-search-filter-list">
                        @foreach(['XS' => 'Extra Small', 'S' => 'Small', 'M' => 'Medium', 'L' => 'Large', 'XL' => 'Extra Large', '6' => '6', '8' => '8', '10' => '10', '12' => '12', '14' => '14'] as $size => $size2)
                            <li>
                                <label>
                                    <input type="checkbox" name="sizes[]" value="{{ $size }}" {{ request()->has('sizes') && in_array($size, request()->sizes) ? 'checked' : '' }}> {{ $size2 }}
                                </label>
                            </li>
                        @endforeach
                        </ul>
                    </div>

                    <div class="content-separate"><div class="content-separate-box"></div></div>

                    <div class="product-search-filter">
                        <p>PRICE RANGE:</p>
                        <ul class="product-search-filter-list">
                            @foreach(['10' => 'Under £10', '25' => 'Under £25', '50' => 'Under £50', '100' => 'Under £100', '250' => 'Under £250', '500' => 'Under £500'] as $price => $price2)
                                <li>
                                    <label>
                                        <input type="checkbox" name="price[]" value="{{ $price }}" {{ request()->has('price') && in_array($price, request()->price) ? 'checked' : '' }}> {{ $price2 }}
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="product-search-filter">
                        <p>RATING:</p>
                        <div>
                            <ul class="product-search-filter-list">
                                @foreach([4 => '4 stars & up', 3 => '3 stars & up', 2 => '2 stars & up', 1 => '1 star & up'] as $rating => $rating2)
                                    <li>
                                        <label>
                                            <input type="checkbox" name="rating[]" value="{{ $rating }}" {{ request()->has('rating') && in_array($rating, request()->rating) ? 'checked' : '' }}> {{ $rating2 }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <button type="submit" class="btn">Apply</button>
                </form>
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