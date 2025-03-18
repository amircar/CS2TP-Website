<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script defer type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>About Team 47</title>
    </head>

    <body>
        @include('header')
        
            <div id="about-us-banner"> 
                <h2>ABOUT US</h2>
                <img src="{{asset('images/about-us/about-us-banner.jpg')}}" alt="Clothes on a Hanger">
            </div>

            <main id="about-us-main">
                <h2>TEAM 47</h2>
                <p>Team 47 is a passionate group 
                    of young, driven individuals coming together to create a bold and 
                    innovative clothing brand. United by a shared love for fashion and 
                    creativity, we aim to redefine modern style with designs that inspire 
                    confidence and individuality. Team 47 is more than just a brand—it's a 
                    vision of empowerment, blending youthful energy with timeless aesthetics. 
                    By combining quality craftsmanship with fresh, unique ideas, we're committed 
                    to building a community that embraces self-expression through fashion. Join 
                    us on this exciting journey as we bring Team 47 to life, one outfit at a time!
                </p>
            </main>

            <div class="content-separate"><div class="content-separate-box"></div></div>

            <div class="about-us-information">
               <div class="about-us-information-text">
                    <h2>OUR STORY</h2>
                    <p>Team 47 is a unique and creative clothing brand founded 
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
               </div>

                <img src="{{asset('images/about-us/Team47-laptop-image.jpg')}}" alt="Team47 Laptop Image">
            </div>

            <div class="content-separate"><div class="content-separate-box"></div></div>

            <div class="about-us-information">
                <img src="{{asset('images/about-us/our-goal-about-us.jpg')}}" alt="Team47 Our Goal">

                <div class="about-us-information-text">
                    <h2>OUR GOAL</h2>
                    <p>At Team 47, we aim to make people feel empowered, 
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
                </div>
            </div>

        @include('footer')
    </body>
</html>