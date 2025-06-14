<?php

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

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/about-us', function () {
    return view('frontend.company.about-us');
});

Route::get('/e-catalogue', function () {
    return view('frontend.e-catalog');
});
// Route::get('/join-our-team', function () {
//     return view('frontend.contact.join-our-team');
// });

Route::get('/contact-us', function () {
    return view('frontend.contact.contact-us');
});

Route::post('contact', 'App\Http\Controllers\frontend\ContactUsController@submit')->name('frontend.contact.submit');

Route::get('/authentic-natural-stone', function () {
    return view('frontend.products.authentic-natural-stone');
});
Route::get('/porcelain-tiles', function () {
    return view('frontend.products.porcelain-tiles');
});

Route::get('/slab-tiles', function () {
    return view('frontend.products.slab-tiles');
});

Route::get('/outdoor-tiles', function () {
    return view('frontend.products.outdoor-tiles');
});

Route::get('/feature-tiles', function () {
    return view('frontend.products.feature-tiles');
});

Route::get('/glass-tiles', function () {
    return view('frontend.products.glass-tiles');
});
Route::get('/quality-control', function () {
    return view('frontend.more.quality-control');
});
// Route::get('/technical-area', function () {
//     return view('frontend.more.technical-area');
// });
Route::get('/tiles-calculator', function () {
    return view('frontend.more.tiles-calculator');
});
Route::get('/tiling-terminologies', function () {
    return view('frontend.more.tiling-terminologies');
});
Route::get('/about-the-directors', function () {
    return view('frontend.about-the-directors');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
