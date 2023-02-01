<?php

use App\Http\Controllers\PageController;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('page.index');

Route::get('/vos', [PageController::class, 'vos'])->name('page.vos');

Route::get('/events', [PageController::class, 'events'])->name('page.events');

Route::get('/news', [PageController::class, 'news'])->name('page.news');

Route::get('/vosmore', [PageController::class, 'vosmore'])->name('page.vosmore');

Route::get('/more', [PageController::class, 'more'])->name('page.more');

Route::get('/indepth', [PageController::class, 'indepth'])->name('page.indepth');

Route::get('/eventmore', [PageController::class, 'eventmore'])->name('page.eventmore');

Route::get('/sign', [PageController::class, 'sign'])->name('page.sign');


Route::get('/tech', function () {
    return view('home/tech');
});

Route::get('/resources', function () {
    return view('home/resources');
});

// Route::get('/events', function () {
//     return view('home/events');
// });

Route::get('/business', function () {
    return view('home/business');
});

Route::get('/editors', function () {
    return view('home/editor');
});

Route::get('/internationals', function () {
    return view('home/international');
});

Route::get('/bookmark', function () {
    return view('home/bookmark');
});

Route::get('/about', function () {
    return view('home/about');
});

Route::get('/partnership', function () {
    return view('home/partnership');
});

Route::get('/network', function () {
    return view('home/networks');
});

// Route::get('/news', function () {
//     return view('home/news');
// });

// Route::get('/sign', function () {
//     return view('home/sign');
// });

// Route::get('/more', function () {
//     return view('home/more');
// });

// Route::get('/vosmore', function () {
//     return view('home/vosmore');
// });

// Route::get('/indepth', function () {
//     return view('home/indepth');
// });

// Route::get('/eventmore', function () {
//     return view('home/eventmore');
// });

Route::get('/language', function () {
    return view('home/language');
});
