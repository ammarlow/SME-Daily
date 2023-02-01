@extends('home.app')

@section('design')

<link rel="stylesheet" href="css/news.css">

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

        <h1 class="heading"><span>Title News</span></h1>

    <div class="posts-container">

        <div class="post">
            <img src="images/header.jpg" alt="" class="image">
            <div class="date">
                <i class="far fa-clock"></i>
                <span>1st may, 2021</span>
            </div>

            <div class="logo">
                <h3 class="title">blog title goes here</h3>
                <a href="#" class="user"></a>
                <a href="#" class="icon">
                    <i class="far fa-bookmark"></i>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                </a>
            </div>
            <div class="text">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis rerum quidem ipsa omnis? Maiores ducimus eius quidem? Dicta et nostrum necessitatibus sunt voluptate ex a, maxime id fugit enim pariatur reiciendis nobis perferendis non. Deleniti, quam voluptate! Quibusdam, pariatur blanditiis harum facilis sequi tenetur est fugit similique nulla eaque, iusto non magnam quod ratione consequuntur dignissimos. Nulla nisi, deleniti obcaecati velit vero tempore labore adipisci quos. Delectus natus sint repellendus. Quisquam tempore iusto aliquam repellendus debitis? Unde fuga porro nam commodi sequi neque ullam accusamus id quisquam atque, nihil sit dolorum nulla, ad voluptate inventore dignissimos quidem quibusdam! Tenetur, incidunt libero ullam possimus ratione iusto veritatis illo facere labore eligendi, unde nihil, expedita assumenda in natus id corporis magni ipsum! Magnam quasi consequuntur saepe odit repellendus. Odio harum quas quidem maxime provident corporis autem fugit voluptatem placeat ut! Aperiam repellat porro aspernatur. Enim consequuntur facilis perferendis molestiae modi esse, cum assumenda laborum praesentium blanditiis dolorum dicta cupiditate, suscipit eum? Omnis sequi fuga magnam nisi sunt sint necessitatibus suscipit dicta deleniti perferendis odio fugit voluptatem ipsam ullam, velit magni veritatis quasi. Soluta quos optio, minima accusantium nam alias maiores error! Quasi perferendis quam consectetur, illum necessitatibus asperiores blanditiis atque dolor sint maxime esse quod alias doloribus inventore pariatur saepe reprehenderit! Iusto, similique excepturi modi, facilis fugiat omnis vel aliquid dignissimos dolorum iure velit sit saepe veritatis officia architecto ducimus in quisquam molestias, nesciunt quis. Magni sed ratione inventore numquam, iusto eius itaque optio atque, quod quasi fugiat similique minima dicta eveniet? Atque rerum iusto reprehenderit mollitia velit odit voluptatem reiciendis dignissimos libero dolorem, voluptatibus tempore modi accusantium numquam exercitationem? Nam, voluptas recusandae ipsam, quos ab, consequuntur corporis praesentium laudantium eaque quaerat molestiae sint esse fuga nesciunt! Dolorem fugit quidem beatae eaque nihil nostrum eius, blanditiis sapiente perferendis reprehenderit tenetur culpa aliquid.</p>
            </div>

            <div class="banner-container">

                <div class="banner">
                    <div class="shoe">
                        <img src="/images/image/shoe.png" alt="">
                    </div>
                    <div class="content">
                        <span>upto</span>
                        <h3>50% 0ff</h3>
                        <p>offer ends after 5 days</p>
                        <a href="#" class="btn">view offer</a>
                    </div>
                    {{-- <div class="women">
                        <img src="images/image/women.png" alt="">
                    </div> --}}
                </div>

            </div>

            <div class="text">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis rerum quidem ipsa omnis? Maiores ducimus eius quidem? Dicta et nostrum necessitatibus sunt voluptate ex a, maxime id fugit enim pariatur reiciendis nobis perferendis non. Deleniti, quam voluptate! Quibusdam, pariatur blanditiis harum facilis sequi tenetur est fugit similique nulla eaque, iusto non magnam quod ratione consequuntur dignissimos. Nulla nisi, deleniti obcaecati velit vero tempore labore adipisci quos. Delectus natus sint repellendus. Quisquam tempore iusto aliquam repellendus debitis? Unde fuga porro nam commodi sequi neque ullam accusamus id quisquam atque, nihil sit dolorum nulla, ad voluptate inventore dignissimos quidem quibusdam! Tenetur, incidunt libero ullam possimus ratione iusto veritatis illo facere labore eligendi, unde nihil, expedita assumenda in natus id corporis magni ipsum! Magnam quasi consequuntur saepe odit repellendus. Odio harum quas quidem maxime provident corporis autem fugit voluptatem placeat ut! Aperiam repellat porro aspernatur. Enim consequuntur facilis perferendis molestiae modi esse, cum assumenda laborum praesentium blanditiis dolorum dicta cupiditate, suscipit eum? Omnis sequi fuga magnam nisi sunt sint necessitatibus suscipit dicta deleniti perferendis odio fugit voluptatem ipsam ullam, velit magni veritatis quasi. Soluta quos optio, minima accusantium nam alias maiores error! Quasi perferendis quam consectetur, illum necessitatibus asperiores blanditiis atque dolor sint maxime esse quod alias doloribus inventore pariatur saepe reprehenderit! Iusto, similique excepturi modi, facilis fugiat omnis vel aliquid dignissimos dolorum iure velit sit saepe veritatis officia architecto ducimus in quisquam molestias, nesciunt quis. Magni sed ratione inventore numquam, iusto eius itaque optio atque, quod quasi fugiat similique minima dicta eveniet? Atque rerum iusto reprehenderit mollitia velit odit voluptatem reiciendis dignissimos libero dolorem, voluptatibus tempore modi accusantium numquam exercitationem? Nam, voluptas recusandae ipsam, quos ab, consequuntur corporis praesentium laudantium eaque quaerat molestiae sint esse fuga nesciunt! Dolorem fugit quidem beatae eaque nihil nostrum eius, blanditiis sapiente perferendis reprehenderit tenetur culpa aliquid.</p>
            </div>

            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-tags"></i>
                    <span> #sme #manufacturing #binapuri</span>
                    <i class="far fa-user"></i>
                    <span>by admin</span>
                </a>
            </div>
        </div>
    </div>

</section>

{{--<!-- posts section ends -->--}}

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

<!-- footer section ends -->

























<!-- custom js file link  -->
<script src="js/script.js"></script>

@endsection
