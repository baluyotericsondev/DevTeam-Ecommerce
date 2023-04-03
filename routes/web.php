<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
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

// Route::get('/edit', function () {
//     return view('dashboard.edit-product');
// });

Route::controller(AdminController::class)->group(function () {

    // Route::get('/products', 'products')->name('products');
    Route::get('/product-details', 'product_details')->name('product_details');

    Route::get('/home', 'show_product');
    Route::get('/', 'show_product')->name('home');
    Route::get('/admin-dashboard', 'admin_dashboard')->name('admin-dashboard');
    Route::get('/admin-charts', 'admin_charts');

    Route::get('/add-product', 'create_product');    //ADMIN DASHBOARDD //create product
    Route::post('/add-product', 'store_product');   //ADMIN DASHBOARDD  //store product

    Route::get('/edit-product/{id}', 'show');  //ADMIN DASHBOARD //edit product
    Route::put('/edit-product/{id}', 'update')->name('update'); //ADMIN DASHBOARDD  //update product
    Route::delete('/edit-product/{id}', 'destroy')->name('delete'); //ADMIN DASHBOARDD //delete product

    Route::get('/admin-tables', 'admin_tables');
    Route::post('/admin-tables', 'admin_tables');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'loginpage')->name('loginpage');
    Route::post('/login', 'login')->name('login'); //controls the log in auth
    Route::get('/logout', 'logout')->name('logout'); // logout
    Route::get('/login/registration', 'registration')->name('registration');
    Route::get('/cart', 'addToCart');
});
