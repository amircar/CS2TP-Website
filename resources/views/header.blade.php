<header>
    <div id="header-wrapper">

        <!-- TODO link does not work outside live server -->
        <a id="main-logo" href="/CS2TP-Website/public" title="Home"><img src={{ asset("images/logo.png") }} alt="logo"></a>

        <ul id="header-items">
            @auth
                <a class="header-item">
                    <li><form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                    </form></li>
                </a>
                <!-- TODO ?replace profile with logout? -->
                <a class="header-item" href="">
                    <li><img src="" alt="profile" title="Profile"></li>
                </a>
                <!-- TODO basket link in header -->
                <a class="header-item" href="basket">
                    <li><img src="" alt="basket" title="Basket"></li>
                </a>
            @else
                <a class="header-item" href="{{ route('register') }}">
                    <li><p>Sign Up</p></li>
                </a>
                <a class="header-item" href="{{ route('login') }}">
                    <li><p>Log In</p></li>
                </a>
            @endauth
        </ul>
    </div>

    <nav>
        <!-- TODO href links do not work outside live server -->
        <ul id="nav-items">
            <a class="nav-item" href="/CS2TP-Website/public/men">
                <li>MEN</li>
            </a>
            <a class="nav-item" href="/CS2TP-Website/public/women">
                <li>WOMEN</li>
            </a>
            <a class="nav-item" href="/CS2TP-Website/public/kids">
                <li>KIDS</li>
            </a>
            <a class="nav-item" href="/CS2TP-Website/public/accessories">
                <li>ACCESSORIES</li>
            </a>
            <a class="nav-item" href="/CS2TP-Website/public/about-us">
                <li>ABOUT US</li>
            </a>
        </ul>
    </nav>
</header>

<button id="back-to-top" type="button">TOP</button>