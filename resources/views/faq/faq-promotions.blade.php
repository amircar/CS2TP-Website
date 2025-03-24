<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>FAQs | Team 47</title>
    </head>

    <body>
        @include('header')
        <main id="aboutus-box">
            <div id="faq-banner"> 
                <h2>FAQ</h2>
                <img src="images/faq/faq-img.jpg" alt="Clothes on a Hanger" class="image">
            </div>

            <!-- The main FAQ box -->
            <div class="faq-box">
                <h3 style="font-size: 50px; text-decoration: underline;">Promotions</h3><!-- Title -->
                <h3>Need Help? Here are some Frequently Asked Questions about Promotions</h3>

                <!-- 1st question on collapsible -->
                    <button class="drop-down" style="margin-top:50px;">Do you offer any discounts or promotions?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>When you have an account with us, we will offer you a variety of discounts. We also offer seasonal promotions throughout the year, so you can enjoy and shop.</p>
                        <br></br>
                    </div>

                    <!-- 2nd question on collapsible -->
                    <button class="drop-down">How can I use my discounts?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>You can use your discounts when you are about to check-out. There is an option for discounts to be added to the total basket before payment.</p>
                        <br></br>
                    </div>

                    <!-- 3rd question on collapsible -->
                    <button class="drop-down">What promotions do you offer?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>We offer a variey of promotions throughout the year like Black Friday promotions, Christmas promotions, Easter promotions and more. 
                            These promotions will have a certain time for when they will run, so make sure you buy before it ends!</p>
                        <br></br>
                    </div>

                    <!-- 4th question on collapsible -->
                    <button class="drop-down">Do discounts expire?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>Yes, discounts do expire. You can check the expiry date when you click on the discounts. You will get notified of discounts soon to expire, so you can use them before they go.</p>
                        <br></br>
                    </div>
                </div>

            <!-- container for the two boxes -->
            <div class="link-container">
                <div class="faq-links-box"><!-- box with other FAQ links -->
                    <span>
                        <h2 style="text-align: center;">FAQs</h2>
                        <p style="text-align: center; font-size: 20px;">Not what you're looking for? Check out some of our other FAQ's</p><br><br>
                        <ul>
                            <li><a href="{{ route("faq-orders") }}" style="text-align: center;">Orders & Shipping</a></li>
                            <li><a href="{{ route("faq-returns") }}" style="text-align: center;">Returns & Exchanges</a></li>
                            <li><a href="{{ route("faq-products") }}" style="text-align: center;">Products & Sizing</a></li>
                            <li><a class="active" href="" style="text-align: center;">Promotions</a></li>  <!-- on this page so its diff colour -->
                            <li><a href="{{ route("faq-other") }}" style="text-align: center;">Other</a></li>
                        </ul>
                    </span>
                </div>
                <div class="faq-links-box"> <!-- box with conact us link -->
                    <h2 style="text-align: center;">Contact Us</h2>
                    <p style="text-align: center; font-size: 20px;">Still need help? Get in touch with us and one of our team members will help.</p>
                    <br><br>
                    <p style="text-align: center; font-size: 20px;">Click on the link to fill out our contact form</p>
                    <br><br>
                    <ul>
                        <li><a href="{{ route("contact-us") }}" style="text-align: center;">Contact Us</a></li> <!-- link to contact us page -->
                    </ul>
                </div>
            </div>

</main>

<script>
    var box = document.getElementsByClassName("drop-down");
    var index;
    
    for (index = 0; index < box.length; index++) {
      box[index].addEventListener("click", function() {
        var text = this.nextElementSibling;
        this.classList.toggle("open");
        
        if (text.style.maxHeight){
          text.style.maxHeight = null;
        } else {
          text.style.maxHeight = text.scrollHeight + "px";
        } 
      });
    }
    </script>

@include('footer')
</body>
</html>