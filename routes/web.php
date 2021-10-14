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

    Route::get('/best-products', 'Admin\BestProductController@index');
    Route::get('/add-best-products', 'Admin\BestProductController@create')->name('add-best-product');
    Route::post('/store-best-products', 'Admin\BestProductController@store')->name('store-best-product');
     Route::get('/edit-best-products/{id}', 'Admin\BestProductController@edit')->name('edit-best-product');
      Route::post('/update-best-products', 'Admin\BestProductController@update')->name('update-best-product');
     Route::get('/delete-best-products/{id}', 'Admin\BestProductController@destroy')->name('delete-best-product');
   




    Route::get('/hot-item', 'Admin\HotItemController@index')->name('hot-item');
    Route::get('/add-hot-item', 'Admin\HotItemController@create')->name('add-hot-item');
    Route::post('/store-hot-item', 'Admin\HotItemController@store')->name('store-hot-item');


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






