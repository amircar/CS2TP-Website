<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/contact-us-style.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script defer src="js/main.js"></script>
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

            <div id="section1">
                <div id="contact-form-box">
                    <div class="title-box">
                        <span>
                            <h3>CONTACT FORM</h3>
                            <p>Let us know of any concerns and we will get back to you shortly.</p>
                        </span>
                    </div>

                    <form id="contact-form">
                        <p>(All fields marked with a star<span style="color: rgb(128, 0, 0)">*</span> are required.)</p>

                        <span>
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" placeholder="First Name" name="fname" required>
                        </span>
                        <span>
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" placeholder="Last Name" name="lname" required>
                        </span>
                        <span>
                            <label for="email">Email Address</label>
                            <input type="email" id="email" placeholder="Email" name="email" required>
                        </span>
                        <span>
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" placeholder="Phone Number" name="phone" required>
                        </span>
                        <span>
                            <label for="description">Description</label>
                            <textarea id="description" placeholder="Message" name="description" rows="4" cols="50" required></textarea>
                        </span>

                        <input type="submit" value="Submit">
                    </form>
                </div>

                <div id="contact-us-box2">
                    <span>
                        <h4>GET IN TOUCH</h4>
                        <p>Call Us At: +1 234 567 890</p>
                        <p>Email Us At: t47@teamfortyseven.com</p>
                        <p>Find Us At: 123 example street, B47 0NY</p>
                    </span>
                </div>
                
                <div id="contact-us-box3">
                    <span>
                        <h2>FAQs</h2>
                        <p>Need some help? Check out some of our FAQ's</p>
                        <ul>
                            <!-- TODO FAQ links on contact us -->
                            <li><a href="">Orders & Shipping</a></li>
                            <li><a href="">Returns & Exchanges</a></li>
                            <li><a href="">Products & Sizing</a></li>
                            <li><a href="">Promotions</a></li>
                            <li><a href="">Other</a></li>
                        </ul>
                    </span>
                </div>
            </div>
        </main>





        <!-- TODO move to js file -->
        <script>
        document.getElementById("contactForm").addEventListener("submit", function(event) {
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


    window.location.href = "mailto:230087860@aston.ac.uk?subject=Contact Form Submission&body=" + encodeURIComponent(body);
            }

    </script>

        @include('footer')

    </body>
</html>