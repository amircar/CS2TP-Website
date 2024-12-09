<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/contact-us-style.css"/>
        <script defer src="js/main.js"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Contact Us | Team 47</title>
    </head>

    <body>
        @include('header')
        
        <main id="about-us-main">
            <!-- contact us banner -->
            <div id="section" style="justify-content: center; height:300px; background-color: white; box-shadow: 0 0 9px rgba(0, 0, 0, 0.3); margin-top: -20px;">
                <img src="images/contact-us/contact-us-banner.jpg " alt="contact-us-banner" class="image" width="100%" height="100%"> 
                <h3 style="text-align: center; margin-top: 100px; position: absolute; color: black; font-size:30px">Contact US</h3>
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

                    <form id="contactForm"> <!-- the form boxes where user can type -->
                        <p>(All fields marked with a star<span style="color: rgb(128, 0, 0)">*</span> are required.)</p>

                        <label for="fname">First Name</label>
                        <input type="text" id="fname" placeholder="First Name" name="fname" style="margin-bottom: 25px;" required>

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" placeholder="Last Name" name="lname" required><br><br>
            
                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="Email" name="email" required><br><br>

                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" placeholder="Phone Number" name="phone" required><br><br>

                        <label for="description">Description</label><br>
                        <textarea id="description" placeholder="Message" name="description" rows="4" cols="50" style="height: 90px;" required></textarea><br><br>
        
                        <input type="submit" value="Submit">
                    </form>
                   
                </div>

                <!-- the black 'get in touch' box with website contact details  -->
                <div class="contactus-box" style="width: 30%; height: 280px; margin-left: 65%; background-color: rgb(20, 0, 0); border: 3px solid white; padding-top: 20px;">
                    <span>
                        <h2 style="text-align: center; color: white;">Get in Touch</h2>
                        <p style="text-align: center; color: white; margin-top: 40px;">Call Us At: +1 234 567 890</p><br><br>
                        <p style="text-align: center; color: white;">Email Us At: t47@teamfortyseven.com</p><br><br>
                        <p style="text-align: center; color: white;">Find Us At: 123 example street, B47 0NY</p><br><br>
                    </span>
                </div>
                
                <!-- the FAQ box with links to sepertae FAQ pages on the different categories -->
                <div class="contactus-box" style="width: 30%; height: 290px; margin-left: 65%; margin-top: 350px; padding-top: 20px;">
                    <span>
                        <h2 style="text-align: center;">FAQs</h2>
                        <p style="text-align: center; font-size: 20px;">Need some help? Check out some of our FAQ's</p><br><br>
                        <ul>
                            <li><a href="" style="text-align: center;">Orders & Shipping</a></li>
                            <li><a href="" style="text-align: center;">Returns & Exchanges</a></li>
                            <li><a href="" style="text-align: center;">Products & Sizing</a></li>
                            <li><a href="" style="text-align: center;">Promotions</a></li>
                            <li><a href="" style="text-align: center;">Other</a></li>
                        </ul>
                    </span>
                </div>
            </div>
        </main>

        @include('footer')
    </body>
</html>