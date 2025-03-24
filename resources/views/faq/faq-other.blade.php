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
                <h3 style="font-size: 50px; text-decoration: underline;">Other</h3><!-- Title -->
                <h3>Need Help? Here are some Frequently Asked Questions</h3>

                    <button class="drop-down" style="margin-top:50px;">How do I sign up for an account?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>To sign up for an account, you click on the sign up button at the top and you provide information like name, email and password. Once signed-in, you can access account information and can log in at any time.</p>
                        <br></br>
                    </div>

                    <button class="drop-down">Can I delete my account?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>Although it is sad to see you go, you can delete your account by clicking the accounts page, click on settings and then there is an option for you to delete your account.</p>
                        <br></br>
                    </div>

                    <button class="drop-down">Are there any accessibility options?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>We have text enlargement so that text can be bigger for people who struggle to see. As we are a start-up business, we don't have many accessibility options. However, we are in the works of adding more accessibility options, so everyone can shop with no worries.</p>
                        <br></br>
                    </div>

                    <button class="drop-down">I want to change my password, how can I do that?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>If you click on your accounts profile - after sucessful login - there is an option for password change. 
                            To change your password, your old password needs to be entered, along with the new password and confirm the password. A confirmation email will be sent to you as well, stating that the password has been changed.</p>
                        <br></br>
                    </div>

                    <button class="drop-down">Can I have save my payment methods?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>On the accounts details, there is a payment information page. This page allows you to save and store payment cards, so when you place an order, 
                            the cards are already saved and provides faster checkout. You can add multiple payment cards and edit information if needed.</p>
                        <br></br>
                    </div>

                    <button class="drop-down">How do I change my personal details?</button>
                    <div class="drop-down-box">
                        <br></br>
                        <p>All personal details can be edited and saved through the accounts page. It has multiple options to view and edit, like personal details, shipping details, payment details and more.</p>
                        <br></br>
                    </div>
            </div>

            <!-- container for the two boxes -->
            <div class="link-container">
                <div class="faq-links-box">
                    <span>
                        <h2 style="text-align: center;">FAQs</h2>
                        <p style="text-align: center; font-size: 20px;">Not what you're looking for? Check out some of our other FAQ's</p>
                        <ul>
                            <li><a href="{{ route("faq-orders") }}" style="text-align: center;">Orders & Shipping</a></li> 
                            <li><a href="{{ route("faq-returns") }}" style="text-align: center;">Returns & Exchanges</a></li>
                            <li><a href="{{ route("faq-products") }}" style="text-align: center;">Products & Sizing</a></li>
                            <li><a href="{{ route("faq-promotions") }}" style="text-align: center;">Promotions</a></li>
                            <li><a class="active" style="text-align: center;">Other</a></li>
                        </ul>
                    </span>
                </div>

                <div class="faq-links-box">
                    <h2 style="text-align: center;">Contact Us</h2>
                    <p style="text-align: center; font-size: 20px;">Still need help? Get in touch with us and one of our team members will help.</p>
                    <ul>
                        <li><a href="{{ route("contact-us") }}" style="text-align: center;">Contact Us</a></li>
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