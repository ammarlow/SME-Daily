<header class="header">

    <a href="{{ route('page.index') }}?language={{ $language }}" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">

        <ul>
            <li class="cstm-nav">
                <form action="" class="search-form2">
                    <input type="search" id="search-box2" placeholder="search here...">
                    <label for="search-box2" class="fas fa-search"></label>
                </form>
            </li>
            <li>
                <a href="{{ route('page.index') }}?language={{ $language }}">
                    @if ($language == null || $language == 'us')
                        Home
                    @else
                        @if ($language == 'my')
                            Utama
                        @elseif ($language == 'ru')
                            Russian
                        @elseif ($language == 'kr')
                            Korea
                        @endif
                    @endif
                </a>
            </li>
            <li><a href="{{ route('page.vos') }}">Voice of the SMEs</a></li>
            <li><a href="#">News <i class="fa fa-caret-down"></i></a>
                <ul>
                    <li><a href="#"> Nav 1</a></li>
                    <li><a href="#"> Nav 2</a></li>
                </ul>
            </li>
            <li><a href="#">Resources <i class="fa fa-caret-down"></i></a>
                <ul>
                    <li><a href="#"> Nav 1</a></li>
                    <li><a href="#"> Nav 2</a></li>
                </ul>
            </li>
            <li><a href="{{ route('page.events') }}">Events</a></li>
            <li class="cstm-nav"><a href="#">Language <i class="fa fa-caret-down"></i></a>
                <ul>
                    <li>
                        <a href="#">
                            <img src="https://flagcdn.com/16x12/us.png" srcset="https://flagcdn.com/32x24/us.png 2x,
                https://flagcdn.com/48x36/us.png 3x" width="16" height="12" alt="United States"> United
                            State</a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://flagcdn.com/16x12/my.png" srcset="https://flagcdn.com/32x24/my.png 2x,
                    https://flagcdn.com/48x36/my.png 3x" width="20" height="15" alt="Malaysia"> Malaysia</a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://flagcdn.com/16x12/ru.png" srcset="https://flagcdn.com/32x24/ru.png 2x,
                    https://flagcdn.com/48x36/ru.png 3x" width="16" height="12" alt="Russia"> Russian</a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://flagcdn.com/16x12/kr.png" srcset="https://flagcdn.com/32x24/kr.png 2x,
                    https://flagcdn.com/48x36/kr.png 3x" width="16" height="12" alt="South Korea"> Korean</a>
                    </li>
                </ul>
            </li>
            <li class="cstm-nav">
                <a href="{{ route('page.sign') }}">
                    @if ($language == null || $language == 'us')
                        Login
                    @else
                        @if ($language == 'my')
                            Log Masuk
                        @elseif ($language == 'ru')
                            Login
                        @elseif ($language == 'kr')
                            Login
                        @endif
                    @endif
                </a>
            </li>


        </ul>

    </nav>

    <div class="icons">

        <div class="fas fa-bars" id="menu-btn"></div>

        <div class="dropdown language-btn">
            @if ($language == null || $language == 'us')
                <img src="https://flagcdn.com/16x12/us.png" srcset="https://flagcdn.com/32x24/us.png 2x,
            https://flagcdn.com/48x36/us.png 3x" width="16" height="12" alt="United States">

            @elseif ($language == 'my')
                <a href="{{ route('page.index') }}?language=my">
                    <img src="https://flagcdn.com/16x12/my.png" srcset="https://flagcdn.com/32x24/my.png 2x,
            https://flagcdn.com/48x36/my.png 3x" width="20" height="15" alt="Malaysia">

            @elseif ($language == 'ru')
                <a href="{{ route('page.index') }}?language=ru">
                    <img src="https://flagcdn.com/16x12/ru.png" srcset="https://flagcdn.com/32x24/ru.png 2x,
            https://flagcdn.com/48x36/ru.png 3x" width="16" height="12" alt="Russia"></a>

            @elseif ($language == 'kr')
            <a href="{{ route('page.index') }}?language=kr">
                <img src="https://flagcdn.com/16x12/kr.png" srcset="https://flagcdn.com/32x24/kr.png 2x,
            https://flagcdn.com/48x36/kr.png 3x" width="16" height="12" alt="South Korea"></a>

            @endif

            <div class="dropdown-content">

                <a href="{{ route('page.index') }}?language=us">
                    <img src="https://flagcdn.com/16x12/us.png" srcset="https://flagcdn.com/32x24/us.png 2x,
            https://flagcdn.com/48x36/us.png 3x" width="16" height="12" alt="United States"> United State</a>

                <a href="{{ route('page.index') }}?language=my">
                    <img src="https://flagcdn.com/16x12/my.png" srcset="https://flagcdn.com/32x24/my.png 2x,
            https://flagcdn.com/48x36/my.png 3x" width="20" height="15" alt="Malaysia"> Malaysia</a>

                <a href="{{ route('page.index') }}?language=ru">
                    <img src="https://flagcdn.com/16x12/ru.png" srcset="https://flagcdn.com/32x24/ru.png 2x,
            https://flagcdn.com/48x36/ru.png 3x" width="16" height="12" alt="Russia"> Russian</a>

                <a href="{{ route('page.index') }}?language=kr">
                    <img src="https://flagcdn.com/16x12/kr.png" srcset="https://flagcdn.com/32x24/kr.png 2x,
            https://flagcdn.com/48x36/kr.png 3x" width="16" height="12" alt="South Korea"> Korean</a>
            </div>
        </div>

        <div class="fas fa-search search-btn"></div>

        <i class="fas fa-sign-in sign-btn">
            <a href="{{ route('page.sign') }}">
                @if ($language == null || $language == 'us')
                    Login
                @else
                    @if ($language == 'my')
                        Log Masuk
                    @elseif ($language == 'ru')
                        Login
                    @elseif ($language == 'kr')
                        Login
                    @endif
                @endif
            </a>
        </i>
        {{-- <div class="fas fa-sign-in" id="sign-btn"></div> --}}
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>
    <form action="" class="login-form">
        <div id="close-side-bar" class="fas fa-times"></div>
    </form>

    <form action="" class="profile-form">
        <!-- {{-- <div id="close-side-bar" class="fas fa-times"></div> --}} -->
        <div class="user">
            <img src="/images/image/pic-1.png" alt="">
            <h3>Hanif Imran</h3>
        </div>
        <nav class="navbarr">
            <a href="#"><i class="fas fa-angle-right"></i> Profile </a>
            <a href="#"><i class="fas fa-angle-right"></i> Preferred Language </a>
            <a href="#"><i class="fas fa-angle-right"></i> Bookmark </a>
            <a href="#"><i class="fas fa-angle-right"></i> Logout </a>
        </nav>

    </form>

</header>

<!-- header section ends -->
