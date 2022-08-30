<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\PropertyController;

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

// Route::get('/', function () {
//     return view('web.home');
// });
Route::get('/', 'App\Http\Controllers\HomeController@home');
Route::get('/about', 'App\Http\Controllers\HomeController@about');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact');
Route::resource('/products', App\Http\Controllers\ProductsController::class);
Route::get('/register', 'App\Http\Controllers\RegistrationController@create');
Route::post('register', 'App\Http\Controllers\RegistrationController@store');
// Route::get('/users', 'App\Http\Controllers\RegistrationController@index');

Route::get('/login', 'App\Http\Controllers\SessionsController@create')->name('login');
Route::post('/login', 'App\Http\Controllers\SessionsController@store');
Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy')->name('logout');
// Route::get('/admin', function () {
//     return view('admin.dashboard');
// })->middleware('auth');
Route::get('/admin', 'App\Http\Controllers\ProductsController@dashboard')->name('admin')->middleware('auth');

Route::resource('/categories', App\Http\Controllers\CategoryController::class)->middleware('auth');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

//start payment process
Route::get('/payment', [FlutterwaveController::class, 'payment'])->name('payment');
// The route that the button calls to initialize payment
Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');

// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');
Route::post('/webhook/flutterwave', [FlutterwaveController::class, 'webhook'])->name('webhook');

Route::post('/sub','App\Http\Controllers\SubsController@store')->name('sub.store');
Route::get('/subs','App\Http\Controllers\SubsController@index')->name('subs.index');
Route::resource('/messages', 'App\Http\Controllers\MessagesController');

Route::get('/cleareverything', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";

    $cleardebugbar = Artisan::call('route:clear');
    echo "Route Bar cleared<br>";
});

Route::get('/places', 'App\Http\Controllers\HomeController@places');
Route::resource('/properties', PropertyController::class);