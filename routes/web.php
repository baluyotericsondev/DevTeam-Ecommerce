<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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


//Edit - for edit data
//Store - store data 
// Update - update data
// Delete - delete data
// login - for login route
// logout - for logout route
// register - for register route
// password - for password route
// email - for email route
// profile - for profile route
// dashboard - for dashboard route
// home - for home route
// index - for index route

Route::get('/', function () {
    return view('home');
});


Route::get('/products', [AdminController::class, 'products'])->name('products');
Route::get('/home', [ItemController::class, 'items']);
Route::get('/product-details', [AdminController::class, 'product_details'])->name('product_details');

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'loginpage')->name('loginpage');
    Route::post('/login', 'login')->name('login'); //controls the log in auth
    Route::get('/logout', 'logout')->name('logout'); // logout
    Route::get('/login/registration', 'registration')->name('registration');
    Route::get('/cart', 'addToCart');
});
