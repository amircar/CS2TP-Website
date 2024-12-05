<header>
    <div id="header-wrapper">
        <a id="main-logo" href="home" title="Home"><img src={{asset("images/logo.png")}} alt="Logo"></a>

        <!-- TODO header links -->
        <ul id="header-items">

            <!-- SEARCH BAR -->
             <form action = "{{route('search')}}"
            <a class="search-bar">
                <input name = "search" type="text" class="search" placeholder="Search...">
                <button class="search-button">Search</button>
            </a>
            </form>

            <!-- IF LOGGED IN -->
            @auth
            <a class="header-item">
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
            </a>
            <a class="header-item" href="">
                <li><img src="" alt="profile" title="Profile"></li>
            </a>
            <a class="header-item" href="basket">
                <li><img src="" alt="basket" title="Basket"></li>
            </a>
            @else
            <!-- ELSE -->
            <a class="header-item" href="{{ route('register')}}">
                <li>
                    <p>Sign Up</p>
                </li>
            </a>
            <a class="header-item" href="{{ route('login')}}">
                <li>
                    <p>Log In</p>
                </li>
            </a>
            @endauth
        </ul>
    </div>

    <!-- TODO menu drop down (not part of MVP) -->
    @include('test');

    <nav>
        <!-- TODO category links -->
        <ul id="nav-items">
            <a class="nav-item" href="{{ route ('mens') }}">
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
            <a class="nav-item" href="about-us">
                <li>ABOUT US</li>
            </a>
        </ul>
    </nav>
</header>

<button id="back-to-top" type="button">TOP</button>