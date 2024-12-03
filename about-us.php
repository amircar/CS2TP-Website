<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script defer src="js/main.js"></script>
        <title>About Team 47</title>
    </head>

    <body>
        <?php require_once('header.php');?>
        
        <main id="about-us-main">
            <div id="section" style="justify-content: center; height:400px; background-color: white;">
                <h3 style="text-align: center; margin-top: 150px;">About Us</h3>
            </div> <!--add image -->
            <div id="section" style="height:230px; justify-content: center; margin-top: 50px;">
                <div class="aboutus-box" style="width: 70%; height: 200px;">
                    <span>
                        <h2 style="text-align: center; color: black;">Team 47</h2>
                        <p style="text-align: center; color: black;">Team 47 is a passionate group 
                            of young, driven individuals coming together to create a bold and 
                            innovative clothing brand. United by a shared love for fashion and 
                            creativity, we aim to redefine modern style with designs that inspire 
                            confidence and individuality. Team 47 is more than just a brand—it's a 
                            vision of empowerment, blending youthful energy with timeless aesthetics. 
                            By combining quality craftsmanship with fresh, unique ideas, we're committed 
                            to building a community that embraces self-expression through fashion. Join 
                            us on this exciting journey as we bring Team 47 to life, one outfit at a time!
                        </p>
                    </span>
                </div>
            </div>
            <!-- TODO fix rollover -->
            <div class="content-separate"><div class="content-separate-box"></div></div>
            
            <div id="section" style="height: 400px;">
            <div class="imagebox">
                    <div class="imagerollover">
                        <img src="" alt="about-us-image">
                            <div class="text2">
                                <div class="aboutus-info">
                                    <h4>About Us</h4>
                                    <br></br>
                                    aboutus team47 as a group
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <!-- <div class="about-us-1">
                 add 3 rollover images so when user hovers the mouse, 
                text will appear and image will lose opacity a bit but still be visible. 
 
                <img src="" alt="about-us-image">
                <img src="" alt="about-us-image">
                <img src="" alt="about-us-image">
            </div> -->

            <div class="content-separate"><div class="content-separate-box"></div></div>

            <div class="about-us-1">
                <img src="" alt="about-us-image">
                <span>
                    <h2>TITLE</h2>
                    <p>TEXT</p>
                </span>
            </div>
        </main>
        <?php require_once('footer.php');?>
    </body>
</html>