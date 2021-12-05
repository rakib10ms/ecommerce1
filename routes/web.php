<?php

use App\Http\Controllers\Admin\FrontendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', 'Frontend\FrontendController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard', 'Admin\FrontendController@index');
    Route::get('/categories', 'Admin\CategoryController@index');
    Route::get('/add-category', 'Admin\CategoryController@add');
    Route::post('/insert-category', 'Admin\CategoryController@insert');
    Route::get('/edit-prod/{id}', 'Admin\CategoryController@edit');
    Route::post('/update-category/{id}', 'Admin\CategoryController@update');
    Route::get('/delete-category/{id}', 'Admin\CategoryController@delete');
   
    Route::get('/products', 'Admin\ProductController@index');
    Route::get('/add-products', 'Admin\ProductController@add');
    Route::post('/insert-product', 'Admin\ProductController@insert');
    Route::get('/product-edit/{id}', 'Admin\ProductController@edit');
    Route::post('/product-update/{id}', 'Admin\ProductController@update');
    Route::get('/product-delete/{id}', 'Admin\ProductController@destroy');

    


    //subscriber
    Route::get('/all-subscriber', 'Admin\SubscriberController@index');
    
});

    Route::post('/all-subscriber/store', 'Admin\SubscriberController@store')->name('all-subscriber');

  Route::get('/view-category/{slug}', 'Frontend\FrontendController@viewCategory')->name('view-category');


    
    Route::get('/contact-us', 'Frontend\ContactController@contactForm')->name('contact-us');
    Route::post('/contact-us/store', 'Frontend\ContactController@storeContactForm')->name('contact-us.store');


    Route::get('/checkout', 'Frontend\CheckOutController@index')->name('checkout');



    //search
    Route::get('/search', 'Frontend\SearchController@index')->name('search.index');

    //product-details
    Route::get('/product-details/{slug}', 'Frontend\FrontendController@productDetails')->name('product-details');



 //all-producuts
 Route::get('/all-product', 'Frontend\FrontendController@allProduct')->name('all-product');

 //all-producuts-filter
 Route::get('/all-product-filter', 'Frontend\FrontendController@filterCategory')->name('price-category-filter');




 Route::post('/add-to-cart', 'Frontend\CartController@addProduct');
 Route::get('/cart-products', 'Frontend\CartController@viewCartProduct');
 Route::get('/show-cart', 'Frontend\CartController@showCartProduct');




 Route::get('/check', 'Frontend\FrontendController@check');






