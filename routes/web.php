<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

// Front End Routes
Route::get('/', 'FrontEndController@home')->name('home');
Route::get('/developpement-web/', 'FrontEndController@developpement')->name('developpement');
Route::get('/developpement-web/site-vitrine', 'FrontEndController@vitrine')->name('vitrine');
Route::get('/developpement-web/site-ecommerce', 'FrontEndController@commerce')->name('commerce');

Route::get('/blog', 'FrontEndController@blog')->name('website.blog');
Route::get('/about', 'FrontEndController@about')->name('website.about');
Route::get('/blog/{slug}', 'FrontEndController@category')->name('website.category');

Route::get('/contact', 'FrontEndController@contact')->name('website.contact');
// Route::get('/blog/{slug}', 'FrontEndController@post')->name('website.post');

Route::get('/blog/{category}/{slug?}', 'FrontEndController@post')->name('website.post');

Route::post('/contact', 'FrontEndController@send_message')->name('website.contact');

Route::get('/posts/resultats', 'SearchController@simple')->name('simple_search');

// Admin Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    Route::resource('category', 'CategoryController');
    Route::resource('tag', 'TagController');
    Route::resource('post', 'PostController');
    Route::resource('user', 'UserController');
    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile', 'UserController@profile_update')->name('user.profile.update');

    // setting
    Route::get('setting', 'SettingController@edit')->name('setting.index');
    Route::post('setting', 'SettingController@update')->name('setting.update');

    // Contact message
    Route::get('/contact', 'ContactController@index')->name('contact.index');
    Route::get('/contact/show/{id}', 'ContactController@show')->name('contact.show');
    Route::delete('/contact/delete/{id}', 'ContactController@destroy')->name('contact.destroy');
});
