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

/**
 * Youth Empowerment Platform routes 
 * This code will be moved out of here into a new application upon download of the new app
 */

Route::get('/yep', function () {
    return view('youth.welcome');
});

Route::get('/yep/courses-and-workshops', function () {
    return view('youth.courses.index');
})->name('courses.index');

Route::get('/yep/computer-basics', function () {
    return view('youth.courses.show');
})->name('courses.show');

Route::get('/yep/sign-in', function () {
    return view('youth.sign-in');
})->name('yep.sign-in');

Route::get('/yep/sign-up', function () {
    return view('youth.sign-up');
})->name('yep.sign-up');












/**
 * Delivery routes
 * 
 */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/restaurants', function () {
    return view('restaurants');
});

Route::get('businesses/business-xyz', function () {
    return view('show-business');
});

Route::get('checkout/confirm', function () {
    return view('checkout.confirm');
});

Route::get('/processing-order', function () {
    return view('processing-order');
});

Route::get('/restaurants/xyz-food-restaurant', function () {
    return view('show-restaurant');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});


Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});


// Route::get('/businesses/restaurants/xyz-restaurant/orders/new-orders', function () {
//     return view('businesses/restaurants/xyz-restaurant/orders/new-orders');
// });

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/tabler', function () {
    return view('others.tabler-full');
});

Route::get('/orders', function () {
    return view('businesses.restaurants.orders.index');
});




