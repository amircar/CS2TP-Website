<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>New Product | Team 47</title>
</head>

<body data-text-size="normal">
    @include('header')

    <main id="new-stock-main">
        <h2>Add new product</h2>
    </main>

    <div class="content-separate">
        <div class="content-separate-box"></div>
    </div>


    <form id="new-Product-Form" action="{{ route("create") }}" method="POST" enctype="multipart/form-data"> <!-- the form boxes where user can type -->
        @csrf

        <label>Product Name: </label><br>
        <input type="text" id="fname" placeholder="Name" name="name" required><br><br>

        <label>Price: </label><br>
        <input type="number" id="price" placeholder="0.00" step="0.01" min="0.01" name="price" required><br><br>

        <label>Size Type: </label><br>
        <select name="size-type" class="size-type" id="size-type" default= "Select Size Type" required>
            <option value="">Select Size Type</option>
            <option value="XS-XL">XS, S, M, L, XL</option>
            <option value="Numbered">6, 8, 10, 12, 14</option>
            <option value="OneSize">O/S</option>
        </select><br><br>

        <label>Size: </label><br>
        <div id="sizes">
            <p>Please Select a Size Type</p>
        </div><br>

        <label>Quantity in Stock: </label><br>
        <input type="number" id="stock" placeholder="1" min="1" name="stock" required><br><br>

        <label>Product Description: </label><br>
        <textarea id="description" placeholder="Description" name="description" rows="4" cols="50" style="height: 90px;"
            required></textarea><br><br>

        <label>Image: </label><br>
        <input type="file" id = "image" name="image" accept="image/*" required><br><br>
        <img id="image-preview">

        <input type="submit" value="Submit">
    </form>

    @include('footer')
</body>

</html>