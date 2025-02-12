<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/contact-us-style.css"/>
        <script defer src="js/main.js"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>FAQ | Team 47</title>
    </head>

    <body>
        @include('header')
        
        <main id="about-us-main">
            <!-- contact us banner -->
            <div id="section" style="justify-content: center; height:300px; background-color: white; box-shadow: 0 0 9px rgba(0, 0, 0, 0.3); margin-top: -20px;">
                <img src="images/contact-us/contact-us-banner.jpg " alt="contact-us-banner" class="image" width="100%" height="100%"> 
                <h3 style="text-align: center; margin-top: 100px; position: absolute; color: black; font-size:30px">FAQ</h3>
            </div> 

            <div id="section" style="height: 740px; justify-content: left;">
                <!-- contact us form -->
                <div class="contactus-box" style="width: 55%; height: 690px;">
                    <div class="titlebox"> <!-- this is the text above the form -->
                        <span>
                            <h2 style="text-align: center;">CONTACT FORM</h2>
                            <p style="text-align: center; color: black;">Let us know of any concerns and we will get back to you shortly.</p>
                            <br><br>
                        </span>
                    </div>

                    
                   
                </div>

            </div>
        </main>


        @include('footer')

    </body>
</html>