<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>About Team 47</title>
    </head>

    <body>
        @include('header')
        
        <main id="about-us-main">

            <!-- FIXME move css to main -->
            <div id="section" style="height:400px; background-color:white;"></div>
            <div class="about-us-box">
                <h3>About Us</h3>
            </div>

            <!-- FIXME move css to main -->
            <div id="section" style="height:300px;">
                <span>
                    <h2>text</h2>
                    <p>text</p>
                    <p>text</p>
                    <p>text</p>
                    <p>text</p>
                </span>
            </div>

            <div class="content-separate"><div class="content-separate-box"></div></div>

            <div class="about-us-2">
                <!-- TODO ?part of mvp? -->
                <!-- add 3 rollover images so when user hovers the mouse, 
                text will appear and image will lose opacity a bit but still be visible. -->
                <span>
                    <h2>TITLE</h2>
                    <p>TEXT</p>
                </span>
                <img src="" alt="about-us-image">
            </div>

            <div class="content-separate"><div class="content-separate-box"></div></div>

            <div class="about-us-1">
                <img src="" alt="about-us-image">
                <span>
                    <h2>TITLE</h2>
                    <p>TEXT</p>
                </span>
            </div>
        </main>

        @include('footer')
    </body>
</html>