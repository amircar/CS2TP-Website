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

            <div class="faq-box">
                <h3 style="font-size: 50px; text-decoration: underline;">Products and Sizing</h3>
                <h3>Need Help? Here are some Frequently Asked Questions about Products and Sizing</h3>

                <button class="drop-down" style="margin-top:50px;">How can I change the size of my product?</button>
                <div class="drop-down-box">
                    <br></br>
                    <p>When you click on an item, it will show you the item and there will be options to click a size before adding it to the basket. 
                        You can choose from x-small(XS), small (S), medium (M), large (L), x-large (XL)</p>
                    <br></br>
                </div>

                <button class="drop-down">How can I check how many items are left in stock?</button>
                <div class="drop-down-box">
                    <br></br>
                    <p>We don't have a feature that allows you to see how many there is in stock, however we do notify if there are a few left or if an item is out of stock. 
                        This can either help checkout faster or shop a similar product to create a great shopping experience.</p>
                    <br></br>
                </div>

                <button class="drop-down">How can I be notified when this product is back in stock?</button>
                <div class="drop-down-box">
                    <br></br>
                    <p>Once you have created an account with us, we will notify you of any re-stocking of items you have saved. This will apply to items saved both in the wishlist and the items left in the basket.</p>
                    <br></br>
                </div>

                <button class="drop-down">What is the price of this product?</button>
                <div class="drop-down-box">
                    <br></br>
                    <p>The price will be located near the title of the item. You can view the price of every item and will also appear in the basket as well, so you know how much you are spending.</p>
                    <br></br>
                </div>

                <button class="drop-down">Do you price match with other retailers?</button>
                <div class="drop-down-box">
                    <br></br>
                    <p>Our items are of high-quality, and therefore each price is given to each item with careful consideration. 
                        We do not price match to other retailers as we may offer items of better-quality than some retailers. </p>
                    <br></br>
                </div>

                <button class="drop-down">Are there any quantity limits for purchasing this product?</button>
                <div class="drop-down-box">
                    <br></br>
                    <p>As we are a start-up business, we do have a limit of 5 pieces of the same item. 
                        This may change later on but for now we are limiting stock, so everyone has an opportunity to buy, without it being out of stock.</p>
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
                            <li><a class="active" href="" style="text-align: center;">Products & Sizing</a></li> <!-- on this page so its diff colour -->
                            <li><a href="{{ route("faq-promotions") }}" style="text-align: center;">Promotions</a></li>
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