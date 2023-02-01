let searchForm = document.querySelector('.search-form');

document.querySelector('.search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    loginForm.classList.remove('active');
    profile.classList.remove('active');
    navbar.classList.remove('active');
}

// let shoppingCart = document.querySelector('.shopping-cart');
//
// document.querySelector('#cart-btn').onclick = () =>{
//     shoppingCart.classList.toggle('active');
//     searchForm.classList.remove('active');
//     loginForm.classList.remove('active');
//     navbar.classList.remove('active');
// }

let profile = document.querySelector('.profile-form');

document.querySelector('#login-btn').onclick = () =>{
    profile.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

// document.querySelector('#close-side-bar').onclick = () => {
//     profile.classList.remove('active');
// }

let loginForm = document.querySelector('.login-form');

document.querySelector('.sign-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    profile.classList.remove('active');
    navbar.classList.remove('active');
}

document.querySelector('#close-side-bar').onclick = () => {
    loginForm.classList.remove('active');
}



let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    // shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
}


// window.onscroll = () =>{
//     searchForm.classList.remove('active');
//     // shoppingCart.classList.remove('active');
//     loginForm.classList.remove('active');
//     navbar.classList.remove('active');
// }

// Start DateTime Script

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var y = today.getFullYear();
    var o = today.getMonth();
    var a = today.getDate();
    var d = today.getDay();

    var monthnames = new Array();
    monthnames[0] = "January";
    monthnames[1] = "February";
    monthnames[2] = "March";
    monthnames[3] = "April";
    monthnames[4] = "May";
    monthnames[5] = "June";
    monthnames[6] = "July";
    monthnames[7] = "August";
    monthnames[8] = "September";
    monthnames[9] = "Oktober";
    monthnames[10] = "November";
    monthnames[11] = "December";

    var weekdays = new Array();
    weekdays[0] = "Sunday";
    weekdays[1] = "Monday";
    weekdays[2] = "Tuesday";
    weekdays[3] = "Wednesday";
    weekdays[4] = "Thursday";
    weekdays[5] = "Friday";
    weekdays[6] = "Saturday";

    m = checkTime(m);
    s = checkTime(s);
    a = checkTime(a);


    document.getElementById('clock').innerHTML =
        `<h1>${weekdays[d]}, ${a} ${monthnames[o]} ${y}, <span id="clocktime">${h}:${m}:${s}</h1>`;
    var t = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) { i = "0" + i };  // Fügt vor einstelligen Zahlen (i > 10) eine Null hinzu
    return i;
}

startTime()

// End TimeDate Script

