<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="refresh" content="10"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SME Daily</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    @yield('header')

</head>

<body>

    <header class="header">

        <a href="#" class="logo">
            <img src="images/logo.png" alt="">
        </a>

        <nav class="navbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/vos">Voice of the SMEs</a></li>
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
                <li><a href="/events">Events</a></li>
            </ul>

        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="dropdown">
                <i class="fas fa-language"></i>
                <div class="dropdown-content">

                    <a href="#">
                    <img src="https://flagcdn.com/16x12/us.png" srcset="https://flagcdn.com/32x24/us.png 2x,
                    https://flagcdn.com/48x36/us.png 3x" width="16" height="12" alt="United States"> United State</a>

                    <a href="#">
                    <img src="https://flagcdn.com/16x12/my.png" srcset="https://flagcdn.com/32x24/my.png 2x,
                    https://flagcdn.com/48x36/my.png 3x" width="20" height="15" alt="Malaysia"> Malaysia</a>

                    <a href="#">
                    <img src="https://flagcdn.com/16x12/ru.png" srcset="https://flagcdn.com/32x24/ru.png 2x,
                    https://flagcdn.com/48x36/ru.png 3x" width="16" height="12" alt="Russia"> Russian</a>

                    <a href="#">
                    <img src="https://flagcdn.com/16x12/kr.png" srcset="https://flagcdn.com/32x24/kr.png 2x,
                    https://flagcdn.com/48x36/kr.png 3x" width="16" height="12" alt="South Korea"> Korean</a>
                </div>
            </div>
            {{-- <select class="language">
                <option value="en">English</option>
                <option value="ru">Russian</option>
                <option value="ma">Malay</option>
                <option value="ko">Korean</option>
            </select> --}}
            {{-- <i class="fas fa-language">
                <a href="#"> Language </a>
            </i> --}}

            <div class="fas fa-search" id="search-btn"></div>
            <i class="fas fa-sign-in" id="sign-btn">
                <a href="#"> Login </a>
            </i>
            {{--            <div class="fas fa-sign-in" id="sign-btn"></div>--}}
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>
        <form action="" class="login-form">
            <div id="close-side-bar" class="fas fa-times"></div>
            <h3>login now</h3>
            <input type="email" placeholder="Email" class="box">
            <input type="password" placeholder="Password" class="box">
            <span class="eye" style="margin-left: -25px; cursor: pointer;">
                    <i id="hide1" class="fa fa-eye"></i>
                    <i id="hide2" class="fa fa-eye-slash"></i>
                </span>
            <p>forget your password? <a href="#">click here</a></p>
            <p>don't have an account? <a href="/sign">create now</a></p>
            <input type="submit" value="login now" class="btn">
        </form>

        <form action="" class="profile-form">
    <!-- {{--        <div id="close-side-bar" class="fas fa-times"></div>--}} -->
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

@yield('content')

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <img src="images/logo.png" alt="">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, saepe.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="images/image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> @SME DAILY OFFICIAL WEBSITE </span> | all rights reserved </div>

</section>

<!-- footer section ends -->

@yield('footer')

</body>
