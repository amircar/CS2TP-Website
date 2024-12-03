<header>
    <div id="header-wrapper">
        <a id="main-logo" href="index.php" title="Home"><img src="" alt="Logo"></a>

        <!-- TODO header links -->
        <ul id="header-items">
            <!-- TODO check if user is logged in -->
            <!-- IF LOGGED IN -->
            @auth
                <a class="header-item" href="{{route('logout')}}">
                    <li><p>Logout</p></li>
                </a>
                <a class="header-item" href="">
                    <li><img src="" alt="profile" title="Profile"></li>
                </a>
                <a class="header-item" href="">
                    <li><img src="" alt="basket" title="Basket"></li>
                </a>
            @else
            <!-- ELSE -->
                <a class="header-item" href="{{ route('register')}}">
                    <li><p>Sign Up</p></li>
                </a>
                <a class="header-item" href="{{ route('login')}}">
                    <li><p>Log In</p></li>
                </a>
            @endauth
        </ul>
    </div>

    <!-- TODO menu drop down (not part of MVP) -->
    @include('test');

    <nav>
        <!-- TODO category links -->
        <ul id="nav-items">
            <a class="nav-item" href="mens">
                <li>MEN</li>
            </a>
            <a class="nav-item" href="">
                <li>WOMEN</li>
            </a>
            <a class="nav-item" href="">
                <li>KIDS</li>
            </a>
            <a class="nav-item" href="">
                <li>ACCESSORIES</li>
            </a>
            <a class="nav-item" href="about-us.php">
                <li>ABOUT US</li>
            </a>
        </ul>
    </nav>
</header>

<button id="back-to-top" type="button">TOP</button>
