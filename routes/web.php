<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailerController;
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
    return view('homeprin');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/orders', function () {
    return view('orders');
});
//Route::get('/contact', function () {
  //  return view('contact');
//});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/admin_contacts', function () {
    return view('admin_contacts');
});
Route::get('/admin_page', function () {
    return view('admin_page');
});
Route::get('/admin_products', function () {
    return view('admin_products');
});
Route::get('/admin_users', function () {
    return view('admin_users');
});
Route::get('/admin_header', function () {
    return view('admin_header');
});
Route::get('/admin_orders', function () {
    return view('admin_orders');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('email', [MailerController::class, 'email'])->name('email'); 

Route::post('composeEmail', [MailerController::class, 'composeEmail'])->name('composeEmail');