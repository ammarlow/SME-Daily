@extends('home.app')

@section('design')

<link rel="stylesheet" href="css/more.css">

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


<section class="container" id="posts">

    <div class="posts-container">

        @for($i=0; $i <=20; $i++)
        <div class="box">
            <div class="image">
                <img src="images/5.jpeg" alt="">
            </div>
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>Business news article</h3>
                <a href="/news" class="btn">read more</a>
            </div>
        </div>
        @endfor
    </div>

    <div id="load-more" class="button"> Load More + </div>

</section><br>

<!-- posts section ends  -->


<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script>
    let loadMoreBtn = document.querySelector('#load-more');
    let currentItem = 3;

    loadMoreBtn.onclick = () =>{
        let boxes = [...document.querySelectorAll('.container .posts-container .box')];
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
