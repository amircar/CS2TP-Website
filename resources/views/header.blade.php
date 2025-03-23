<header>
    <div id="header-wrapper">
        <a id="main-logo" class="unselectable" href="{{ route('home') }}" title="Home"><img src={{ asset("images/logo.png") }} alt="team47-logo"></a>

        <form id="search-bar-container" action="{{ route('search') }}">
            <button id="search-button"></button>
            <input id="search-bar" name="search" type="text" placeholder="SEARCH...">
        </form>
        
        <ul id="header-items" class="unselectable">

            <!-- button to toggle between normal/large text size on page -->
            <li id="toggle-text-size" class="unselectable">
                <p>A</p>
                <label class="toggle-switch"><input type="checkbox"></label>
                <p>A</p>
            </li>

                        
            <!-- TODO remove when logout implemented in account page -->
            @auth
                <a class="header-item">
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                </a>
                

                <!-- TODO drop-down for options in account -->
                <!-- TODO account page link in header -->
                <a class="header-item" href="">
                    <li><img src="{{asset("images/account_icon.png")}}" alt="profile" title="Profile"></li>
                </a>
                <a class="header-item" href="{{ route('basket') }}">
                    <li><img src="{{asset("images/basket.png")}}" alt="basket" title="Basket"></li>
                </a>
            @else
                <a class="header-item" href="{{ route('register') }}">
                    <li>
                        <p>SIGN UP</p>
                    </li>
                </a>
                <a class="header-item" href="{{ route('login') }}">
                    <li>
                        <p>LOG IN</p>
                    </li>
                </a>
            @endauth
        </ul>
    </div>

    <!-- TODO add drop-down menu -->
    <nav>
        <ul id="nav-items">
            <a class="nav-item" href="{{ route('men') }}">
                <li>MEN</li>
            </a>
            <a class="nav-item" href="{{ route('women') }}">
                <li>WOMEN</li>
            </a>
            <a class="nav-item" href="{{ route('kids') }}">
                <li>KIDS</li>
            </a>
            <a class="nav-item" href="{{ route('accessories') }}">
                <li>ACCESSORIES</li>
            </a>
            <a class="nav-item" href="{{ route('about-us') }}">
                <li>ABOUT US</li>
            </a>
        </ul>
    </nav>
</header>

<button id="back-to-top" class="unselectable" type="button">TO<span> P</span></button>