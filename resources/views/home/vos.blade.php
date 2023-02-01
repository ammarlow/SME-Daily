@extends('home.app')

@section('design')

<link rel="stylesheet" href="css/vos.css">

@endsection

@section('content')

<!-- home section starts  -->

<section class="home" id="home">
    <div class="top-bar">
        <div class="time" id="clock"></div>
    </div>
</section>

<!-- home section ends -->

{{-- Title section start--}}

<section class="title">
    <h1 class="heading"><span> Voice of the SMEs </span> </h1>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for keywords.." title="Type in a name">
</section>


{{-- Title section end--}}

<!-- posts section starts  -->


<section class="container" id="posts">

    <div class="posts-container">

        @for($i=0; $i <=8; $i++)
        @if ($i!=4)
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
        <!-- <div class="post">
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
        </div> -->
    </div>

    <div class="sidebar">
        <div class="box">
            <h3 class="title">Opinion</h3>
            @for($i=0; $i <=3; $i++)
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
    <a href="{{ route('page.vosmore') }}" class="button">More Articles +</a>
</section>

<!-- posts section ends -->

<!-- categories section starts  -->

<!-- <section class="categories" id="categories">

{{--    <h1 class="heading"><span>In Depth</span> </h1>--}}

    <div class="box-container">
        {{-- @for($i=0; $i <=8; $i++) --}}
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
        {{-- @endfor --}}
    </div>
    <div id="load-more" class="btn"> Load More </div>
</section> -->

<br>

<!-- categories section ends -->

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

@endsection
