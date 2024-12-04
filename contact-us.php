<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script defer src="js/main.js"></script>
    </head>

    <body>
        <?php require_once('header.php');?>
        
        <main id="about-us-main">
            <div id="section" style="justify-content: center; height:300px; background-color: white;">
                <h3 style="text-align: center; margin-top: 100px;">Contact US</h3>
            </div> <!--add image -->
            <div id="section" style="height: 800px; margin-top: 50px; justify-content: left;">
                <div class="contactus-box" style="width: 55%; height: 600px; display: flex; flex-wrap: wrap;">
                    <span>
                        <h2 style="text-align: center; color: black;">Team 47</h2>
                        <p style="text-align: center; color: black;">one outfit at a time!
                        </p>
                        <br><br>
                    </span>
                    <form id="contactForm" style="margin-top: 40px;">
                    
                        <label for="fname"></label>
                        <input type="text" id="fname" placeholder="First Name" name="fname" required>

                        <label for="lname"></label>
                        <input type="text" id="lname" placeholder="Last Name" name="lname" required><br><br>
            
                        <label for="description"></label><br>
                        <textarea id="description"placeholder="Message" name="description" rows="4" cols="50" required></textarea><br><br>
        
                        <label for="email"></label>
                        <input type="email" id="email" placeholder="Email" name="email" required><br><br>
        
                        <label for="confirm_email"></label>
                        <input type="email" id="confirm_email" placeholder="Confirm Email" name="confirm_email" required><br><br>
        
                        <label for="phone"></label>
                        <input type="tel" id="phone" placeholder="Phone Number" name="phone" required><br><br>
        
                        <label for="contact_method">Preferred Contact Method:</label><br>
                        <select id="contact_method" name="contact_method">
                             <option value="email">Email</option>
                             <option value="phone">SMS</option>
                             <option value="both">Both</option>
                         </select><br><br>
        
                        <input type="submit" value="Submit">
                    </form>
                    <!-- <span>
                        <h2 style="text-align: center; color: black;">Team 47</h2>
                        <p style="text-align: center; color: black;">one outfit at a time!
                        </p>
                    </span> -->
                   
                </div>
                <div class="contactus-box" style="width: 30%; height: 200px; margin-left: 65%">
                    <span>
                        <h2 style="text-align: center; color: black;">Team 47</h2>
                        <p style="text-align: center; color: black;">one outfit at a time!</p>
                    </span>
                </div>
            </div>
            
            <div class="content-separate"><div class="content-separate-box"></div></div>
            
        </main>
        <?php require_once('footer.php');?>

    </body>
</html>