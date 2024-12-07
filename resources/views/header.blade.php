<header>
    <div id="header-wrapper">
        <a id="main-logo" href="{{ route('home') }}" title="Home"><img src={{ asset("images/logo.png") }} alt="team47-logo"></a>

        <!-- TODO images sources (icons) -->
        <ul id="header-items">

            <!-- SEARCH BAR -->
            <li>
                <form action="{{ route('search') }}">
                    <a class="search-bar">
                        <input class="search" name="search" type="text" placeholder="Search...">
                        <button class="search-button">Search</button>
                    </a>
                </form>
            </li>

            <!-- TODO ?only show on homepage? -->
            <!-- button to toggle between normal/large text size on page -->
            <li id="toggle-text-size">
                <p>A</p>
                <label class="toggle-switch"><input type="checkbox"></label>
                <p>A</p>
            </li>

            @auth
                <a class="header-item">
                    {{-- style="display: inline; --}}
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </li>
                </a>
                <a class="header-item" href="">
                    <li><img src="" alt="profile" title="Profile"></li>
                </a>
                <a class="header-item" href="{{ route('basket') }}">
                    <li><img src="images/b.svg" alt="basket" title="Basket"></li>
                </a>
            @else
                <a class="header-item" href="{{ route('register') }}">
                    <li>
                        <p>Sign Up</p>
                    </li>
                </a>
                <a class="header-item" href="{{ route('login') }}">
                    <li>
                        <p>Log In</p>
                    </li>
                </a>
            @endauth
        </ul>
    </div>

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

<button id="back-to-top" type="button">TOP</button>