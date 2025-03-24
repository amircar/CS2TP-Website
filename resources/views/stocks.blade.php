<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Stock | Team 47</title>
</head>

<body>
    @include('header')

    <section id="featured-products-list">
        <h2>Stock</h2>
        <ul class="stock-list">
            @foreach ($stocks as $stock)

                @include('single-stock', ['stock' => $stock])

            @endforeach
        </ul>
    </section>

    @include('footer')
</body>
<!-- Check there is any empty stock -->
@if($empty->isNotEmpty()) Check there is any empty stock
    @php //Create the message to be displayed in the alert
        $message = "The following stocks are empty:\n\n";
        foreach ($empty as $stock) {
            $message .= "{$stock->product->name} Size: {$stock->size->size}\n";
        }
    @endphp

    <div class="alert alert-danger">
        <script>
            window.onload = function () {
                alert(@json($message)); // Pass PHP string to JavaScript and display alert
            }
        </script>
    </div>
@endif

</html>