<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Grocery Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/vos.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="/">Home</a>
        <a href="/vos">VOS</a>
        <a href="/business">Business</a>
        <a href="/tech">Tech</a>
        <a href="/resources">Resources</a>
        <a href="/events">Events</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <select class="language">
            <option value="en">English</option>
            <option value="ru">Russian</option>
            <option value="ma">Malay</option>
            <option value="ko">Korean</option>
        </select>
        <div class="fas fa-search" id="search-btn"></div>
        <a href="#"><div class="fas fa-sign-in" id="sign-btn"></div></a>
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
        <p>forget your password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="#">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

    <form action="" class="profile">
        <div id="close-side-bar" class="fas fa-times"></div>
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

<!-- home section starts  -->

<section class="home" id="home">
    {{--    <h1 class="heading"><span>In Depth</span> </h1>--}}
    <div class="top-bar">
        <div class="time" id="clock"></div>
    </div>
</section>

<!-- home section ends -->

{{-- Title section start--}}

<section class="main" id="main">
    <h1 class="heading"><span> Tech </span> </h1>
</section>


{{-- Title section end--}}


<!-- posts section starts  -->

<section class="container" id="posts">

    <div class="posts-container">

        <div class="post">
            <div class="dropdown">
                <button class="dropbtn">Top Stories
                    <i class="fas fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">International's Pick</a>
                    <a href="#">Editor's Pick</a>
                </div>
            </div>
            <img src="images/header.jpg" alt="" class="image">
            <div class="date">
                <i class="far fa-clock"></i>
                <span>1st may, 2021</span><br>
            </div>
            <h3 class="title">Business and News in Asia</h3>
            {{--            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis maxime alias autem distinctio. Fuga, esse velit!</p>--}}
            {{--            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam quam?</p>--}}
            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>by admin</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-bookmark"></i>
                    {{--                    <span>(45)</span>--}}
                </a>
                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                    {{--                    <span>(29)</span>--}}
                </a>
            </div>
        </div>
    </div>

    <div class="sidebar">
        <div class="box">
            {{--            <h3 class="title">Opinion</h3>--}}
            @for($i=0; $i <=2; $i++)
                <div class="about">
                    <img src="images/default-image.jpg" alt="">
                    <div class="content">
                        <h3><i>"Keep your thinking right, and your business will be right."</i></h3>
                        <p>Steven Tan</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>

</section>

<!-- posts section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    {{--    <h1 class="heading"><span>In Depth</span> </h1>--}}

    <div class="box-container">
        @for($i=0; $i <=8; $i++)
            <div class="box">
                <div class="image">
                    <img src="images/5.jpeg" alt="">
                </div>
                {{--            <h3>vegitables</h3>--}}
                {{--            <p>upto 45% off</p>--}}
                {{--            <a href="#" class="btn">shop now</a>--}}
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by user </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    </div>
                    <h3>Business news article</h3>
                    {{--                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>--}}
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
        @endfor
    </div>
    <div id="load-more" class="btn"> Load More </div>
</section>

<br>

<!-- categories section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <img src="images/logo.png" alt="">
            {{--            <h3> groco <i class="fas fa-shopping-basket"></i> </h3>--}}
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



<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script>
    let loadMoreBtn = document.querySelector('#load-more');
    let currentItem = 3;

    loadMoreBtn.onclick = () =>{
        let boxes = [...document.querySelectorAll('.categories .box-container .box')];
        for (let i = currentItem; i < currentItem + 3; i++){
            boxes[i].style.display = 'inline-block';
        }
        currentItem += 3;

        if(currentItem >= boxes.length){
            loadMoreBtn.style.display = 'none';
        }
    }
</script>

</body>
</html>
