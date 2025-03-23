<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>FAQ | Team 47</title>
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
                <h3 style="font-size: 50px; text-decoration: underline;">Orders and Shipping</h3><!-- Title -->
                <h3>Need Help? Here are some Frequently Asked Questions about Orders and Shipping</h3>

                <!-- 1st question on collapsible -->
                    <button class="drop-down" style="margin-top:50px;">How can I check past orders?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>To view past orders, first click on your account which is located in the top navigation bar. This can only be accessed after successful login. 
                            You will be taken to the accounts page and then you can click on past orders in the left sidebar to view past orders.</p>
                        <br></br>
                    </div>

                    <!-- 2nd question on collapsible -->
                    <button class="drop-down">How long does shipping and order processing take?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>Orders can be delivered from 6-8 working days, however the country and number of items that are orderd can affect shipping and delivery dates.</p>
                        <br></br>
                    </div>

                    <!-- 3rd question on collapsible -->
                    <button class="drop-down">Can I change the shipping address once I have placed an order?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>Once you place an order you have a one hour time frame where you can change or edit shipping information. After that one hour, you would have to return the package and re-order to recieve the package at the location you want.</p>
                        <br></br>
                    </div>

                    <!-- 4th question on collapsible -->
                    <button class="drop-down">Can I combine multiple orders into one shipment?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>When you place an order, all items will be packed and sent into one shipment. However, if you make more than one order, it is not guaranteed that the packages will be placed in the same shipment.</p>
                        <br></br>
                    </div>

                    <!-- 5th question on collapsible -->
                    <button class="drop-down">Do I have to pay for shipping?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>We do require a shipping fee if the order total is under a certain amount. However, we do offer free shipping discounts throughout the year, so that you get an opportunity to shop without any additional fees.</p>
                        <br></br>
                    </div>

                    <!-- 6th question on collapsible -->
                    <button class="drop-down">What happens if my package gets lost or damaged during shipping?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>If your package gets lost or stolen, get in touch with us and provide us with the order number. If we find that the package did not make its way to you, we will either issue a refund or send out another package.</p>
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
                            <li><a class="active" href="" style="text-align: center;">Orders & Shipping</a></li> <!-- on this page so its diff colour -->
                            <li><a href="{{ route("faq-returns") }}" style="text-align: center;">Returns & Exchanges</a></li>
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