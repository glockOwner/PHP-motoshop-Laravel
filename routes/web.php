<?php

use App\Http\Controllers\Auth\EditPersonalDataController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Product\CatalogController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::group(['namespace' => 'App\Http\Controllers\About', 'prefix' => 'about'], function (){
    Route::get('/about', 'AboutController')->name('about.about');
    Route::get('/contacts', 'ContactsController')->name('about.contacts');
    Route::get('/credit', 'CreditController')->name('about.credit');
    Route::get('/delivery', 'DeliveryController')->name('about.delivery');
    Route::get('/guarantee', 'GuaranteeController')->name('about.guarantee');
    Route::get('/payment', 'PaymentController')->name('about.payment');
});

Route::group(['namespace' => 'App\Http\Controllers\Auth', 'prefix' => '/home'], function (){
    Route::patch('/{user}', 'EditPersonalDataController')->name('auth.update');
    Route::get('/order_history', 'PersonalOrderHistoryController')->name('auth.history');
});

Route::group(['namespace' => 'App\Http\Controllers\Product', 'prefix' => '/catalog'], function (){
    Route::get('/', 'CatalogController')->name('catalog.index');
    Route::get('/show/{product}', 'ShowController')->name('catalog.show');
});
Route::group(['namespace' => 'App\Http\Controllers\Cart', 'prefix' => '/cart'], function (){
    Route::get('/', 'IndexController')->name('cart.index');
    Route::get('/add/{product}', 'AddController')->name('cart.add');
    Route::group(['middleware' => 'cart'], function (){
        Route::get('/delete/{product}', 'DeleteController')->name('cart.delete');
        Route::get('/checkout', 'CheckoutController')->name('cart.checkout');
        Route::post('/checkout/send', 'SendOrderController')->name('cart.send');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

