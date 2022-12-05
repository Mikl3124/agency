<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Auth::routes();

//Redirections Migration

Route::get('/hebergement', function () {
  return redirect('/',301);
});

Route::get('services/hebergement', function () {
  return redirect('/',301);
});

Route::get('/e-commerce', function () {
  return redirect('/developpement-web/site-ecommerce',301);
});

Route::get('/services/developpement-web/e-commerce/', function () {
  return redirect('/developpement-web/site-ecommerce',301);
});

Route::get('/services/developpement-web/site-vitrine/', function () {
  return redirect('/developpement-web/site-wordpress',301);
});

Route::get('/services', function () {
  return redirect('/',301);
});

Route::get('/notre-agence/demande-de-devis', function () {
  return redirect('/contact',301);
});

Route::get('/design', function () {
  return redirect('/developpement-web/site-sur-mesure',301);
});

Route::get('/services/design', function () {
  return redirect('/developpement-web/site-sur-mesure',301);
});

Route::get('/referencement-naturel', function () {
  return redirect('/marketing-digital/seo',301);
});


Route::get('/referencement-naturel', function () {
  return redirect('/marketing-digital/seo',301);
});

Route::get('/services/developpement-web/', function () {
  return redirect('/developpement-web',301);
});

Route::get('/demande-de-devis', function () {
  return redirect('/contact',301);
});

Route::get('/notre-agence', function () {
  return redirect('/',301);
});

Route::get('/services/e-commerce', function () {
  return redirect('/developpement-web/site-ecommerce',301);
});

// Front End Routes
Route::get('/', 'FrontEndController@home')->name('home');
Route::get('/developpement-web/', 'FrontEndController@developpement')->name('developpement');
Route::get('/developpement-web/site-wordpress', 'FrontEndController@wordpress')->name('wordpress');
Route::get('/developpement-web/site-ecommerce', 'FrontEndController@commerce')->name('commerce');
Route::get('/developpement-web/site-sur-mesure', 'FrontEndController@custom')->name('custom');
Route::get('/marketing-digital/', 'FrontEndController@marketing')->name('marketing-digital');
Route::get('/marketing-digital/seo', 'FrontEndController@seo')->name('seo');
Route::get('/marketing-digital/seo-local', 'FrontEndController@seo_local')->name('seo-local');
Route::get('/marketing-digital/seo-technique', 'FrontEndController@seo_technique')->name('seo-technique');
Route::get('/marketing-digital/publicite-en-ligne', 'FrontEndController@ppc')->name('publicite-en-ligne');
Route::get('/contact', 'FrontEndController@contact')->name('contact');
Route::get('/mentions-legales', 'FrontEndController@mentions')->name('mentions');
Route::get('/politique-de-confidentialite', 'FrontEndController@confidentialite')->name('confidentialite');

//Cocon sémantique agence WEB
//Route::get('/comment-creer-une-agence-web', 'FrontEndController@creer_agence_web')->name('creer_agence_web');


//Bordeaux
Route::get('/agence-marketing-digital-bordeaux', 'FrontEndController@marketing_digital_bordeaux')->name('marketing-bordeaux');
Route::get('/agence-seo-bordeaux', 'FrontEndController@seo_bordeaux')->name('seo-bordeaux');
Route::get('/agence-web-bordeaux', 'FrontEndController@web_bordeaux')->name('web-bordeaux');

//Périgueux
Route::get('/agence-marketing-digital-perigueux', 'FrontEndController@marketing_digital_perigueux')->name('marketing-perigueux');
Route::get('/agence-seo-perigueux', 'FrontEndController@seo_perigueux')->name('seo-perigueux');
Route::get('/agence-web-perigueux', 'FrontEndController@web_perigueux')->name('web-perigueux');

Route::post('/contact-form', 'ContactController@store')->name('contact-mail')->middleware(ProtectAgainstSpam::class);
Route::post('/newsletter-form', 'ContactController@newsletter')->name('newsletter-mail');

Route::get('/blog', 'FrontEndController@blog')->name('website.blog');
Route::get('/about', 'FrontEndController@about')->name('website.about');
Route::get('/blog/{slug}', 'FrontEndController@category')->name('website.category');


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

Route::get('/sitemap.xml', 'SitemapXmlController@index');
