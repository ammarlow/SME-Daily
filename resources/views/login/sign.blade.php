@extends('home.app')

@section('design')

<link rel="stylesheet" href="css/sign.css">

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

{{-- <section class="main" id="main">
    <h1 class="heading"><span> Sign In </span> </h1>
</section> --}}

{{-- Title section end--}}


<!-- categories section starts  -->



{{-- <div class="form-container">
    <div class="button-box">
        <div id="btn"></div>
        <button type="button" onclick="" class="toggle-btn">Log In</button>
        <button type="button" onclick="" class="toggle-btn">Register</button>
    </div>

    <form action="" method="post" id="login">

        <h3> Login </h3>

        <div class="txt_field">
            <span><b>Email:</b></span>
            <input type="email" required>
        </div>

        <div class="txt_field">
            <span style="width: 100%"><b>Password:</b></span>
                <input type="password" required>
                    <span class="eye1" style="margin-left: -35px; cursor: pointer;">
                        <i id="hide1" class="fa fa-eye"></i>
                        <i id="hide2" class="fa fa-eye-slash"></i>
                    </span>
        </div>

        <input type="submit" name="submit" value="Register Now" class="form-btn">
        <p>already have an account? <a href="">Login Now</a></p>

    </form>

    <form action="" method="post" id="register">

        <h3> Register</h3>

        <div class="txt_field">
            <span><b>Surname:</b></span>
            <input type="text" required>
        </div>

        <div class="txt_field">
            <span><b>Given Name:</b></span>
            <input type="text" required>
        </div>

        <div class="txt_field">
            <span><b>Email:</b></span>
            <input type="email" required>
        </div>

        <div class="txt_field">
            <span style="width: 100%"><b>Password:</b></span>
                <input type="password" required>
                    <span class="eye1" style="margin-left: -35px; cursor: pointer;">
                        <i id="hide1" class="fa fa-eye"></i>
                        <i id="hide2" class="fa fa-eye-slash"></i>
                    </span>
        </div>

        <div class="txt_field">
            <span style="width: 100%"><b>Re-Confirm Password:</b></span>
                <input type="password" required>
                    <span class="eye1" style="margin-left: -35px; cursor: pointer;">
                        <i id="hide1" class="fa fa-eye"></i>
                        <i id="hide2" class="fa fa-eye-slash"></i>
                    </span>
        </div>

        <select name="language">
            <option value="">English</option>
            <option value="">Malay</option>
            <option value="">Russian</option>
            <option value="">Korean</option>
        </select>
        <input type="submit" name="submit" value="Register Now" class="form-btn">
        <p>already have an account? <a href="">Login Now</a></p>

    </form>

</div> --}}

    <div class="form-box" style="overflow-y:auto; height:500px;">
        <a href="#" class="logo"><img src="images/logo.png" alt=""></a>
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()"> Login </button>
            <button type="button" class="toggle-btn" onclick="register()"> Register</button>
        </div>
        <form id="login" class="input-group">
            <div class="txt-field">
                <span><b>Email :</b></span>
                <input type="text" class="input-field" placeholder="Enter your email" required>
            </div>

            <div class="txt-field">
                <span><b>Password :</b></span>
                <i class="far fa-eye" id="togglePassword"></i>
                <input type="password" class="input-field" id="password" placeholder="Enter your password" required>

            </div>

            <input type="checkbox" onclick="myFunction()" class="check-box">Show Password
            {{-- <input type="checkbox" class="check-box"><span>Remember Password</span> --}}
            <button type="submit" class="submit-btn"> Log In</button>
        </form>
        <form id="register" class="input-group">
            <div class="txt-field">
                <span><b>Surname:</b></span>
                <input type="text" class="input-field" placeholder="Enter Surname" required>
            </div>

            <div class="txt-field">
                <span><b>Email :</b></span>
                <input type="text" class="input-field" placeholder="Email" required>
            </div>

            <div class="txt-field">
                <span><b>Password :</b></span>
                <i class="far fa-eye" id="togglePassword"></i>
                <input type="password" class="input-field" id="password" placeholder="Enter your password" required>
            </div>

            <div class="txt-field">
                <span><b>Re-Password :</b></span>
                <i class="far fa-eye" id="togglePassword" style="margin-left: 225px"></i>
                <input type="password" class="input-field" id="password" placeholder="Enter your password" required>
            </div>

            <div class="txt-field">
                <span><b>Language:</b></span>
                    <select name="language">
                        <option value="" selected>Select the language</option>
                        <option value="en">English</option>
                        <option value="ma">Malay</option>
                        <option value="ru">Russian</option>
                        <option value="ko">Korean</option>
                    </select>
            </div>

            <input type="checkbox" class="check-box"><span>I agree to the terms & condition </span>
            <button type="submit" class="submit-btn"> Register</button><br>
        </form>
    </div>

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

<script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register(){
        x.style.left = "-400px"
        y.style.left = "50px"
        z.style.left = "110px"
    }
    function login(){
        x.style.left = "50px"
        y.style.left = "450px"
        z.style.left = "0"
    }
</script>

<script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);

        // toggle the icon
        this.classList.toggle("fa-eye-slash");
    });

    // prevent form submit
    const form = document.querySelector("form");
    form.addEventListener('submit', function (e) {
        e.preventDefault();
    });
</script>

@endsection
