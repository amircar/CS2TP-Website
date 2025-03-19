<link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">

<footer>
    <div id="footer-style">

        <!-- Sign Up / Login Section -->    
        @guest
            <div class="footer-section">  
                <h3>TEAM 47</h3>
                <p>Sign up or log in so that you can make purchases and keep up to date with the latest offers.</p>
                <a href="{{ route('login') }}"><button class="footer-button">Log in</button></a>
                <a href="{{ route('register') }}"><button class="footer-button">Sign Up</button></a>
            </div>
            <div id="footer-space"></div>
        @endguest


        <div class="footer-section">
            <h3>CUSTOMER SERVICE</h3>
            <ul>
                <li><a href="{{ route('about-us') }}">About Us</a></li>

                
                <li><a href="{{route('contact-us')}}">Contact Us</a></li>

                <li><a href="">FAQs</a></li>
                <li><a href="">Terms and Conditions</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>ACCOUNT</h3>
            <ul>
                <li><a href="">My Account</a></li>
                <li><a href="">Wishlist</a></li>
                <li><a href="">Delivery</a></li>
                <li><a href="">Shipping Information</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>FOLLOW US</h3>
            <ul>
                <li><a href="https://www.facebook.com">Facebook</a></li>
                <li><a href="https://www.instagram.com">Instagram</a></li>
                <li><a href="https://www.twitter.com">Twitter</a></li>
                <li><a href="https://www.youtube.com">YouTube</a></li>
            </ul>
        </div>

        <div id="line"></div> <!-- line for decoration -->
        <h4><a href="{{ route('home') }}" title="Home">2024 Team 47</a></h4>
    </div>
    
</footer>