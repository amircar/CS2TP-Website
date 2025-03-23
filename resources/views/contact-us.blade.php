<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Contact Us | Team 47</title>
    </head>

    <body>
        @include('header')
        
        <main id="contact-us-main">
            <div id="contact-us-banner">
                <img src="images/contact-us/contact-us-banner.jpg" alt="contact-us-banner"> 
                <h2>CONTACT US</h2>
            </div> 

            <div id="contact-us-item-wrapper">
                <div id="contact-form-box">
                    <div class="title-box">
                        <h3>CONTACT FORM</h3>
                        <p>Let us know of any concerns and we will get back to you shortly.</p>
                    </div>

                    <p>(All fields marked with an asterisk (<span style="color: rgb(128, 0, 0)">*</span>) are required.)</p>
                    
                    <form id="contact-form">
                        <div>
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" placeholder="First Name" name="fname" required>
                        </div>
                        <div>
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" placeholder="Last Name" name="lname" required>
                        </div>
                        <div>
                            <label for="email">Email Address</label>
                            <input type="email" id="email" placeholder="Email" name="email" required>
                        </div>
                        <div>
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" placeholder="Phone Number" name="phone" required>
                        </div>
                        <div>
                            <label for="description">Description</label>
                            <textarea id="description" placeholder="Message" name="description" rows="4" cols="50" required></textarea>
                        </div>

                        <input type="submit" value="Submit">
                    </form>
                </div>

                <div id="contact-us-box-wrapper">
                    <div id="contact-us-contact-details">
                        <span>
                            <h4>GET IN TOUCH</h4>
                            <p>Call Us At: +1 234 567 890</p>
                            <p>Email Us At: t47@teamfortyseven.com</p>
                            <p>Find Us At: 123 example street, B47 0NY</p>
                        </span>
                    </div>
                    
                    <div id="contact-us-faq">
                        <span>
                            <h4>FAQs</h4>
                            <p>Need some help? Check out some of our FAQ's</p>
                            <ul>
                                <!-- TODO FAQ links on contact us -->
                                <li><a href="{{ route("faq-orders") }}">Orders & Shipping</a></li>
                                <li><a href="{{ route("faq-returns") }}">Returns & Exchanges</a></li>
                                <li><a href="{{ route("faq-products") }}">Products & Sizing</a></li>
                                <li><a href="{{ route("faq-promotions") }}">Promotions</a></li>
                                <li><a href="{{ route("faq-other") }}">Other</a></li>
                            </ul>
                        </span>
                    </div>
                </div>
            </div>
        </main>






        <!-- TODO ???move to js file -->
        
        <script>
            document.getElementById("contact-form").addEventListener("submit", function(event) {
                event.preventDefault(); 
                sendEmail();
                alert('Message sent!');
                contactForm.reset();
            });
            
            function sendEmail() {
                var firstName = document.getElementById("fname").value;
                var email = document.getElementById("email").value;
                var phone = document.getElementById("phone").value;
                var description = document.getElementById("description").value;

                var body = "First Name: " + fname +
                "\nEmail: " + email +
                "\nPhone Number: " + phone +
                "\nProject Description: " + description;


                //    TODO submitted form goes to database
                    window.location.href = "mailto:230087860@aston.ac.uk?subject=Contact Form Submission&body=" + encodeURIComponent(body);
                }
        </script>

        @include('footer')

    </body>
</html>