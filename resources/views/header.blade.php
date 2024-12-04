<!-- TODO check that href links work -->

<header>
    <div id="header-wrapper">
        <a id="main-logo" href="index.php" title="Home"><img src="images/logo.svg" alt="Logo"></a>

        <!-- TODO header links -->
        <ul id="header-items">
            @auth
            <!-- TODO logout button can just be profile button for mvp (as there is no profile page) -->
                {{-- <a class="header-item" href="{{route('logout')}}">
                    <li><p>Logout</p></li>
                </a> --}}
                <a class="header-item" href="{{route('logout')}}">
                    <li><img src="" alt="profile" title="Profile"></li>
                </a>
                <a class="header-item" href="">
                    <li><img src="" alt="basket" title="Basket"></li>
                </a>
            @else
                <a class="header-item" href="{{ route('register')}}">
                    <li><p>Sign Up</p></li>
                </a>
                <a class="header-item" href="{{ route('login')}}">
                    <li><p>Log In</p></li>
                </a>
            @endauth
        </ul>
    </div>

    <nav>
        <ul id="nav-items">
            <a class="nav-item" href="men.php">
                <li>MEN</li>
            </a>
            <a class="nav-item" href="women.php">
                <li>WOMEN</li>
            </a>
            <a class="nav-item" href="kids.php">
                <li>KIDS</li>
            </a>
            <a class="nav-item" href="accessories.php">
                <li>ACCESSORIES</li>
            </a>
            <a class="nav-item" href="about-us.php">
                <li>ABOUT US</li>
            </a>
        </ul>
    </nav>
</header>

<button id="back-to-top" type="button">TOP</button>