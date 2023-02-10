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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('index');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'contact_store'])->name('contact.form');
// Products
Route::get('/our-products', [App\Http\Controllers\ProductsController::class, 'our_products'])->name('our_products');
Route::get('/our-products/{id}', [App\Http\Controllers\ProductsController::class, 'our_product_show'])->name('our_products.show');
Route::get('/our-products/category/{id}', [App\Http\Controllers\ProductsController::class, 'our_product_category_show'])->name('our_products.show');
Route::get('/job-application', [App\Http\Controllers\ContactController::class, 'jobapplication'])->name('jobapplication');
Route::post('/job-application', [App\Http\Controllers\ContactController::class, 'jobs_store'])->name('jobs.form');
Route::get('/dealer-request', [App\Http\Controllers\ContactController::class, 'dealerrequest'])->name('dealrerequest');
Route::post('/dealer-request', [App\Http\Controllers\ContactController::class, 'dealer_store'])->name('dealrerequest.form');

// Page Routes
Route::get('/page/{slug}', 'App\Http\Controllers\PageController@index')->name('page.index');

// Dashboard Routes
Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], function () {
    Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('index');

    Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile.index')->middleware('auth');
    // dashboard.profile.update
    Route::put('/profile', 'App\Http\Controllers\ProfileController@update')->name('profile.update')->middleware('auth');
    // Pages Routes
    Route::resource('pages', App\Http\Controllers\PagesController::class);
    Route::resource('products', App\Http\Controllers\ProductsController::class);
    Route::resource('category', App\Http\Controllers\CategoryController::class);
    // contact
    Route::get('/contact', 'App\Http\Controllers\ContactController@dashboard_contact')->name('contact.index');
    Route::get('/contact/{id}', 'App\Http\Controllers\ContactController@dashboard_contact_show')->name('contact.show');
    Route::delete('/contact/{id}', 'App\Http\Controllers\ContactController@dashboard_contact_destroy')->name('contact.destroy');

    // jobsapplication
    Route::get('/jobsapplication', 'App\Http\Controllers\ContactController@dashboard_jobsapplication')->name('jobsapplication.index');
    Route::get('/jobsapplication/{id}', 'App\Http\Controllers\ContactController@dashboard_jobsapplication_show')->name('jobsapplication.show');
    Route::delete('/jobsapplication/{id}', 'App\Http\Controllers\ContactController@dashboard_jobsapplication_destroy')->name('jobsapplication.destroy');

    // contact
    Route::get('/dealerrequest', 'App\Http\Controllers\ContactController@dashboard_dealerrequest')->name('dealerrequest.index');
    Route::get('/dealerrequest/{id}', 'App\Http\Controllers\ContactController@dashboard_dealerrequest_show')->name('dealerrequest.show');
    Route::delete('/dealerrequest/{id}', 'App\Http\Controllers\ContactController@dashboard_dealerrequest_destroy')->name('dealerrequest.destroy');
    // System get
    Route::get('/system', 'App\Http\Controllers\SystemController@index')->name('system.index');
    // System update
    Route::put('/system', 'App\Http\Controllers\SystemController@update')->name('system.update');
});

