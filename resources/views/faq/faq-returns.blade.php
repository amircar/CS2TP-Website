<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Account</title>
    </head>
<body>

@include('header')

<main id="aboutus-box">
    <!-- The top banner with image and title of page -->
<div id="section" style="justify-content: center; height:300px; background-color: white; box-shadow: 0 0 9px rgba(0, 0, 0, 0.3); margin-top: -20px; opacity: 100%;"> 
                <h3 style="margin-left:550px; margin-top: 100px; position: absolute; font-size:90px;">FAQ</h3>
                <img src="images/faq/faq-img.jpg" alt="Clothes on a Hanger" class="image" width="100%" height="100%">
            </div>

            <!-- The main FAQ box -->
            <div class="faq-box">
                <h3 style="font-size: 50px; text-decoration: underline;">Returns and Exchanges</h3><!-- Title -->
                <h3>Need Help? Here are some Frequently Asked Questions about Returns and Exchanges</h3>

                <!-- 1st question on collapsible -->
                    <button class="drop-down" style="margin-top:50px;">What is your return and exchange policy?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>You have 30 days to return or exchange an item if its not on sale. If the product is on sale you will have 14 days. 
                            Just use the printed return label given with the parcel and once we revieve the parcel, you will recieve the money within 3-5 working days</p>
                        <br></br>
                    </div>

                    <!-- 2nd question on collapsible -->
                    <button class="drop-down">How does exchanging an item work?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>If you want to exchange an item, once we have recived the original item, you will immediately get an online giftcard immediately. 
                            You can then use that giftcard whenever you want on the TEAM 47 website. This will save you having to wait a few more days for a refund. </p>
                        <br></br>
                    </div>

                    <!-- 3rd question on collapsible -->
                    <button class="drop-down">Can I return an item before it arrives?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>You can return an item if it's still processing. Once its fully processed and left its first location, you will have to wait until the parcel delivers for you to return it.</p>
                        <br></br>
                    </div>

                    <!-- 4th question on collapsible -->
                    <button class="drop-down">Is it possible to return/exchange an item if it has been opened?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>As long as all the tags are still on it and its in great condition, then it can be returned/exchanged.</p>
                        <br></br>
                    </div>

                    <!-- 5th question on collapsible -->
                    <button class="drop-down">How long does it take to process a refund or exchange?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>A refund/exchnage proccess takes 2-3 working days and once the item has successfully been returned to our warehouse, 
                            the giftcard for an exchange will immediately come through, whereas a refund will take an additional 3-5 working days.</p>
                        <br></br>
                    </div>

                    <!-- 6th question on collapsible -->
                    <button class="drop-down">Do I need to pay for shipping when sending back a return or exchange?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>You would not have to pay an additional charge to ship back to us, however the original charge for shipping when making an order, will not be returned. </p>
                        <br></br>
                    </div>

                     <!-- 7th question on collapsible -->
                     <button class="drop-down">Will I receive a full refund for the returned item?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>If the item is in the condition you have recieved it, you will get the full refund excluding shipping costs. 
                            However if the package seems to be damaged, we would need to assess it and either send the package back or offer a partial refund.</p>
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
                            <li><a class="active" href="" style="text-align: center;">Returns & Exchanges</a></li><!-- on this page so its diff colour -->
                            <li><a href="{{ route("faq-products") }}" style="text-align: center;">Products & Sizing</a></li>
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