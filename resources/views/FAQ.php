<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/contact-us-style.css">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>About Team 47</title>
    </head>

    <body>
        @include('header')
        
        <main id="about-us-main">
            <!-- banner at the top -->
            <div id="section" style="justify-content: center; height:300px; background-color: white; box-shadow: 0 0 9px rgba(0, 0, 0, 0.3); margin-top: -20px;"> 
                <h3 style="text-align: center; margin-top: 100px; position: absolute; color: white; font-size:30px;">About Us</h3>
                <img src="{{asset('images/about-us/about-us-banner.jpg')}}" alt="Clothes on a Hanger" class="image" width="100%" height="100%">
            </div>
            <!-- small paragraph of text -->
            <div id="section" style="height:230px; justify-content: center; margin-top: 50px;">
                <div class="aboutus-box" style="width: 70%; height: 200px;">
                    <span>
                        <h2 style="text-align: center; color: black;">Team 47</h2>
                        <p style="text-align: center; color: black; font-size: 17px;">Team 47 is a passionate group 
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

            <div class="content-separate"><div class="content-separate-box"></div></div>

            <!-- the our story box -->
            <div id="section" style="justify-content: left; height: 450px;">
               <div class="aboutus-text">
                    <span>
                        <h2 style="text-decoration: underline;">Our Story</h2>
                        <p style="font-size: 18px;">Team 47 is a unique and creative clothing brand founded 
                            by a group of young individuals with a passion for fashion. Founded in 2024, 
                            Team 47 focuses on clothes that would make an impact to the clothing world. 
                            With so many different designs and styles, our clothing is perfectly diverse 
                            and distinct. The founders of this company were assigned to work together in a 
                            team and were labelled as Team 47. Since then, the name has stuck and they 
                            decided to make a clothing company highlighting the name. It was cool and unique, 
                            and with each piece we create, the name 'Team 47' gives it meaning and we hope 
                            that you can wear our fashion items with pride. We believe that with each item, 
                            it can bring a powerful form of self-expression and reflect our commitment to 
                            the innovation, quality and boldness we have dedicated to each item. 
                        </p>
                    </span>
               </div>

               <div class="imagebox" style="width: 35%;">
                    <img src="{{asset('images/about-us/Team47-laptop-image.jpg')}}" alt="Team47 Laptop Image" class="image" width="100%" height="100%">
               </div> 
            </div>

            <div class="content-separate"><div class="content-separate-box"></div></div>

            <!-- the our goal box -->
            <div id="section" style="justify-content: left; height: 450px;">
                <div class="imagebox" style="width: 35%; margin-left: 5%;">
                    <img src="{{asset('images/about-us/our-goal-about-us.jpg')}}" alt="Team47 Our Goal" class="image" width="100%" height="100%">
                </div>
                 
                <div class="aboutus-text" style="margin-left: 39.5%;">
                    <span>
                        <h2 style="text-decoration: underline;">Our Goal</h2>
                        <p style="font-size: 18px;">At Team 47, we aim to make people feel empowered, 
                            confident and proud in each of our designs. We offer high-quality clothing 
                            items and accessories so that it will look great, feel great and will last long. 
                            Team 47 wants to build a brand  that revolutionises the approach to fashion and 
                            allow people to embrace their authentic selves. we do this by creating fashion 
                            items that can stand out stylishly and used for self-expression. We want to build 
                            a community where every creative idea is celebrated and not just left in the 
                            shadows. Each idea is the beginning of a new story! Everyone is different and we 
                            aim to reach out to a diverse range of people so that everyone can wear our 
                            designs while feeling confident and creative, one outfit at a time!
                        </p>
                    </span>
                </div>
            </div>
        </main>

        @include('footer')
    </body>
</html>