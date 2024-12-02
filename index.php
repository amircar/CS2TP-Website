<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script defer src="js/main.js"></script>

        <!----------------------------
            SEO (optional)
        ----------------------------->
        <title>Team 47 | Login</title>
        <!-- title should be category/product name from database on single/products page -->
        <meta name="description" content=""> <!-- shown under title on search engine, changes based on product (may not always be needed for pages that do not need to be found on search engine (like wishlist)-->
        <!-- description = product desc -->
        <meta name="robots" content="index, follow"> <!--for crawlers (no index, follow does not show up on search engine)-->
        <!-- OPEN GRAPH (for social media) -->
        <meta property="og:title" content="Team 47 Homepage">
        <meta property="og:url" content="">
        <meta property="og:description" content="">
        <meta property="og:locale" content="en_GB">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Team 47">
        <meta property="og:image" content=""> <!--url to image-->
        <meta property="og:image:width" content="1200"> <!--min 1200 x 630-->
        <meta property="og:image:height" content="630">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body id="login">
        <?php require_once('header.php');?>



        <!-- To do, implement login with backend -->
        
        <div class="wrapper">
            <form action="">
                <h1>Login</h1>
                    <div class="input-field">
                        <input type="text" placeholder="Enter Username" required>
                        <i class='bx bx-user' ></i>
                    </div>
                      
                    <div class="input-field">
                        <input type="text" placeholder="Enter Password" required>
                        <i class='bx bx-lock-alt' ></i>
                    </div>
                    
                    <div class="remember-checkbox">
                        <label><input type="checkbox"> Remember login details?</label>
                        <a href="#">Forgot password?</a> 
                    </div> 
                    <div class="register-link">
                        <p>No account? Join the team by clicking <a href="#"> here.</a></p>
                    </div>
            </form>
            
            <button type="submit" class="btn"></button>
        </div>

        <?php require_once 'footer.php' ?>
    </body>
</html>