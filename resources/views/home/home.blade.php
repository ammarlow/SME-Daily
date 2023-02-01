@extends('home.app')

@section('design')

<link rel="stylesheet" href="css/style1.css">

@endsection

@section('content')

    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="top-bar">
            <div class="time" id="clock"></div>
        </div>

    </section>

    <!-- home section ends -->

    <!-- posts section starts  -->

    <section>
        <div id="myBtnContainer">
            <button class="buttonCon active" onclick="filterSelection">
                @if ($language == null || $language == 'us')
                    Top Stories
                @else
                    @if ($language == 'my')
                        Cerita Terkini
                    @elseif ($language == 'ru')
                        Top Stories
                    @elseif ($language == 'kr')
                        Top Stories
                    @endif
                @endif
            </button>
            <button class="buttonCon" onclick="filterSelection">
                @if ($language == null || $language == 'us')
                    Editor's Pick
                @else
                    @if ($language == 'my')
                        Pilihan Penerbit
                    @elseif ($language == 'ru')
                        Top Stories
                    @elseif ($language == 'kr')
                        Top Stories
                    @endif
                @endif
            </button>
        </div>
    </section>

    <section class="container" id="posts">

        <div class="posts-container">

            @for ($i = 0; $i <= 8; $i++)
                @if ($i != 4)
                    <div class="row">
                        <div class="image">
                            <img src="images/5.jpeg" alt="">
                        </div>
                        <div class="content">
                            <div class="icons">
                                <a href="#"> <i class="fas fa-user"></i> by user </a>
                                <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                            </div>
                            <h3>Business news article</h3>
                            <a href="/news" class="btn" style="text-align: center">read more</a>
                            <div class="links">
                                <a href="#" class="user"></a>
                                <a href="#" class="icon">
                                    <i class="far fa-bookmark"></i>
                                </a>
                                <a href="#" class="icon">
                                    <i class="far fa-share-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                @else
                    <div class="row1">
                        <div class="shoe">
                            <img src="/images/image/shoe.png" alt="">
                        </div>
                        <div class="content">
                            <span>upto</span>
                            <h3>50% 0ff</h3>
                            <p>offer ends after 5 days</p>
                            <a href="#" class="btn">view offer</a>
                        </div>
                    </div>

                @endif
            @endfor

            <!-- {{-- <div class="post"> --}}
            {{-- <div class="dropdown"> --}}
            {{-- <button class="dropbtn">Top Stories --}}
            {{-- <i class="fas fa-caret-down"></i> --}}
            {{-- </button> --}}
            {{-- <div class="dropdown-content"> --}}
            {{-- <a href="#">International's Pick</a> --}}
            {{-- <a href="#">Editor's Pick</a> --}}
            {{-- </div> --}}
            {{-- </div> --}}
            {{-- <img src="images/header.jpg" alt="" class="image"> --}}
            {{-- <div class="date"> --}}
            {{-- <i class="far fa-clock"></i> --}}
            {{-- <span>1st may, 2021</span><br> --}}
            {{-- </div> --}}
            {{-- <h3 class="title">Business and News in Asia</h3> --}}
            {{-- <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis maxime alias autem distinctio. Fuga, esse velit!</p> --}}
            {{-- <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam quam?</p> --}}
            {{-- <div class="links"> --}}
            {{-- <a href="#" class="user"> --}}
            {{-- <i class="far fa-user"></i> --}}
            {{-- <span>by admin</span> --}}
            {{-- </a> --}}
            {{-- <a href="#" class="icon"> --}}
            {{-- <i class="far fa-bookmark"></i> --}}
            {{-- <span>(45)</span> --}}
            {{-- </a> --}}
            {{-- <a href="#" class="icon"> --}}
            {{-- <i class="far fa-share-square"></i> --}}
            {{-- <span>(29)</span> --}}
            {{-- </a> --}}
            {{-- </div> --}}
            {{-- </div> --}} -->

            <!-- posts section ends  -->
        </div>
        <!-- about section starts  -->

        <!-- {{-- <div class="posts-container"> --}}
            {{-- <div class="box"> --}}
            {{-- @for ($i = 0; $i <= 2; $i++) --}}
            {{-- <div class="about"> --}}
            {{-- <img src="images/default-image.jpg" alt=""> --}}
            {{-- <div class="content"> --}}
            {{-- <h3>Business News Article</h3> --}}
            {{-- <div class="date"> --}}
            {{-- <i class="far fa-clock"></i> --}}
            {{-- <span>1st may, 2021</span> --}}
            {{-- </div> --}}
            {{-- <p>Steven Tan</p> --}}
            {{-- <a href="#" class="button">read more</a> --}}
            {{-- </div> --}}
            {{-- </div> --}}
            {{-- @endfor --}}
            {{-- </div> --}}
            {{-- </div> --}} -->
        <!-- about section ends -->

        <div class="sidebar">
            <div class="box">
                <h3 class="title">Opinion</h3>
                @for ($i = 0; $i <= 3; $i++)
                    <div class="about">
                        <img src="images/default-image.jpg" alt="">
                        <div class="content">
                            <h3><i>"Keep your thinking right, and your business will be right."</i></h3>
                            <p>Steven Tan</p>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="box">
                <h3 class="title">popular posts</h3>
                <div class="p-post">
                    <a href="#">
                        <h3>01. Article Title</h3>
                        <span><i class="far fa-clock"></i>1st may, 2021</span>
                    </a>
                    <a href="#">
                        <h3>02. Article Title</h3>
                        <span><i class="far fa-clock"></i>1st may, 2021</span>
                    </a>
                    <a href="#">
                        <h3>03. Article Title</h3>
                        <span><i class="far fa-clock"></i>1st may, 2021</span>
                    </a>
                    <a href="#">
                        <h3>04. Article Title</h3>
                        <span><i class="far fa-clock"></i>1st may, 2021</span>
                    </a>
                </div>
            </div>

        </div>

    </section>

    <section class="more" id="more">
        <a href="{{ route('page.more') }}" class="button">More Articles +</a>
    </section>

    <!-- features section starts  -->

    <!-- {{-- <section class="features" id="features"> --}}

            {{-- <h1 class="heading"><span>In Depth</span> </h1> --}}

            {{-- <div class="box-container"> --}}
            {{-- @for ($i = 0; $i <= 8; $i++) --}}
            {{-- <div class="box"> --}}
            {{-- <div class="about"> --}}
            {{-- <img src="images/default-image.jpg" alt=""> --}}
            {{-- <div class="content"> --}}
            {{-- <h3>shaikh anas</h3> --}}
            {{-- <p>Business and finance news all over the world.</p> --}}

            {{-- </div> --}}
            {{-- </div> --}}
            {{-- </div> --}}
            {{-- @endfor --}}
            {{-- </div> --}}
            {{-- <section class="more" id="more"> --}}
            {{-- <a href="#" class="button">More Articles +</a> --}}
            {{-- </section> --}}
            {{-- </section> --}} -->

    <!-- features section ends -->

    <!-- categories section starts  -->

    <section class="categories" id="categories">

        <h1 class="heading"><span>In Depth</span> </h1>

        <div class="box-container">
            @for ($i = 0; $i <= 8; $i++)
                @if ($i != 4)
                    <div class="box">
                        <div class="image">
                            <img src="images/1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Business news article</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                            <a href="/news" class="btn">read more</a>
                        </div>
                    </div>
                @else
                    <div class="box1">
                        <div class="shoe">
                            <img src="/images/image/shoe.png" alt="">
                        </div>
                        <div class="content">
                            <span>upto</span>
                            <h3>50% 0ff</h3>
                            <p>offer ends after 5 days</p>
                            <a href="#" class="btn">view offer</a>
                        </div>
                    </div>
                @endif

            @endfor
        </div>
        <section class="more" id="more">
            <a href="{{ route('page.indepth') }}" class="button"> More Article + </a>
        </section>

    </section>

    <!-- categories section ends -->

    <!-- review section starts  -->

    <!-- {{-- <section class="review" id="review"> --}}

            {{-- <h1 class="heading"> customer's <span>review</span> </h1> --}}

            {{-- <div class="swiper review-slider"> --}}

            {{-- <div class="swiper-wrapper"> --}}

            {{-- <div class="swiper-slide box"> --}}
            {{-- <img src="images/image/pic-1.png" alt=""> --}}
            {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p> --}}
            {{-- <h3>john deo</h3> --}}
            {{-- <div class="stars"> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star-half-alt"></i> --}}
            {{-- </div> --}}
            {{-- </div> --}}

            {{-- <div class="swiper-slide box"> --}}
            {{-- <img src="images/image/pic-2.png" alt=""> --}}
            {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p> --}}
            {{-- <h3>john deo</h3> --}}
            {{-- <div class="stars"> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star-half-alt"></i> --}}
            {{-- </div> --}}
            {{-- </div> --}}

            {{-- <div class="swiper-slide box"> --}}
            {{-- <img src="images/image/pic-3.png" alt=""> --}}
            {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p> --}}
            {{-- <h3>john deo</h3> --}}
            {{-- <div class="stars"> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star-half-alt"></i> --}}
            {{-- </div> --}}
            {{-- </div> --}}

            {{-- <div class="swiper-slide box"> --}}
            {{-- <img src="images/image/pic-4.png" alt=""> --}}
            {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p> --}}
            {{-- <h3>john deo</h3> --}}
            {{-- <div class="stars"> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star"></i> --}}
            {{-- <i class="fas fa-star-half-alt"></i> --}}
            {{-- </div> --}}
            {{-- </div> --}}

            {{-- </div> --}}

            {{-- </div> --}}

            {{-- </section> --}} -->

    <!-- review section ends -->

    <!-- blogs section starts  -->

    <!-- {{-- <section class="blogs" id="blogs"> --}}

            {{-- <h1 class="heading"> our <span>blogs</span> </h1> --}}

            {{-- <div class="box-container"> --}}

            {{-- <div class="box"> --}}
            {{-- <img src="images/image/blog-1.jpg" alt=""> --}}
            {{-- <div class="content"> --}}
            {{-- <div class="icons"> --}}
            {{-- <a href="#"> <i class="fas fa-user"></i> by user </a> --}}
            {{-- <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a> --}}
            {{-- </div> --}}
            {{-- <h3>fresh and organic vegitables and fruits</h3> --}}
            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p> --}}
            {{-- <a href="#" class="btn">read more</a> --}}
            {{-- </div> --}}
            {{-- </div> --}}

            {{-- <div class="box"> --}}
            {{-- <img src="images/image/blog-2.jpg" alt=""> --}}
            {{-- <div class="content"> --}}
            {{-- <div class="icons"> --}}
            {{-- <a href="#"> <i class="fas fa-user"></i> by user </a> --}}
            {{-- <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a> --}}
            {{-- </div> --}}
            {{-- <h3>fresh and organic vegitables and fruits</h3> --}}
            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p> --}}
            {{-- <a href="#" class="btn">read more</a> --}}
            {{-- </div> --}}
            {{-- </div> --}}

            {{-- <div class="box"> --}}
            {{-- <img src="images/image/blog-3.jpg" alt=""> --}}
            {{-- <div class="content"> --}}
            {{-- <div class="icons"> --}}
            {{-- <a href="#"> <i class="fas fa-user"></i> by user </a> --}}
            {{-- <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a> --}}
            {{-- </div> --}}
            {{-- <h3>fresh and organic vegitables and fruits</h3> --}}
            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p> --}}
            {{-- <a href="#" class="btn">read more</a> --}}
            {{-- </div> --}}
            {{-- </div> --}}

            {{-- </div> --}}

            {{-- </section> --}} -->

    <!-- blogs section ends -->
@endsection
