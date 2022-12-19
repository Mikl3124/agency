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
Route::get('/comment-creer-une-agence-web', 'FrontEndController@creer_agence_web')->name('creer_agence_web');
Route::get('/reviews', 'FrontEndController@reviews')->name('reviews');


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

//COCON AGENCE WEB
// Cible
Route::get('web/guide-agence-web', 'AgenceWebController@cible')->name('web_cible');
// Mixtes
Route::get('web/comment-creer-une-agence-web', 'AgenceWebController@mixte_1')->name('web_mixte_1');
Route::get('web/lemploi-en-agence-web', 'AgenceWebController@mixte_2')->name('web_mixte_2');
Route::get('web/quels-sont-les-outils-dune-agence-web', 'AgenceWebController@mixte_3')->name('web_mixte_3');
Route::get('web/quest-ce-quune-agence-web', 'AgenceWebController@mixte_4')->name('web_mixte_4');
Route::get('web/quels-sont-les-services-dune-agence-web', 'AgenceWebController@mixte_5')->name('web_mixte_5');

// Complémentaires 1
Route::get('web/pourquoi-creer-une-agence-web', 'AgenceWebController@web_comp_1_1')->name('web_comp_1_1');
Route::get('web/quels-sont-les-clients-dune-agence-web', 'AgenceWebController@web_comp_1_2')->name('web_comp_1_2');
Route::get('web/comment-trouver-des-clients-en-agence-web', 'AgenceWebController@web_comp_1_3')->name('web_comp_1_3');
Route::get('web/quel-statut-pour-une-agence-web', 'AgenceWebController@web_comp_1_4')->name('web_comp_1_4');
// Complémentaires 2
Route::get('web/qui-travaille-en-agence-web', 'AgenceWebController@web_comp_2_1')->name('web_comp_2_1');
Route::get('web/pourquoi-travailler-en-agence-web', 'AgenceWebController@web_comp_2_2')->name('web_comp_2_2');
// Complémentaires 3
Route::get('web/quest-ce-quun-cms', 'AgenceWebController@web_comp_3_1')->name('web_comp_3_1');
Route::get('web/quest-ce-quun-framework', 'AgenceWebController@web_comp_3_2')->name('web_comp_3_2');
Route::get('web/comment-choisir-un-hebergeur-de-site-internet', 'AgenceWebController@web_comp_3_3')->name('web_comp_3_3');
Route::get('web/pourquoi-utiliser-slack-en-agence-web', 'AgenceWebController@web_comp_3_4')->name('web_comp_3_4');
Route::get('web/pourquoi-utiliser-trello-en-agence-web', 'AgenceWebController@web_comp_3_5')->name('web_comp_3_5');
Route::get('web/pourquoi-utiliser-hootsuite-en-agence-web', 'AgenceWebController@web_comp_3_6')->name('web_comp_3_6');
Route::get('web/google-analytics-en-agence-web', 'AgenceWebController@web_comp_3_7')->name('web_comp_3_7');
Route::get('web/mailchimp-en-agence-web', 'AgenceWebController@web_comp_3_8')->name('web_comp_3_8');
Route::get('web/pourquoi-utiliser-hhrefs-en-agence-web', 'AgenceWebController@web_comp_3_9')->name('web_comp_3_9');
Route::get('web/pourquoi-utiliser-moz-en-agence-web', 'AgenceWebController@web_comp_3_10')->name('web_comp_3_10');
// Complémentaires 4
Route::get('web/comment-fonctionne-une-agence-web', 'AgenceWebController@web_comp_4_1')->name('web_comp_4_1');
Route::get('web/quels-sont-les-differents-type-dagence', 'AgenceWebController@web_comp_4_2')->name('web_comp_4_2');
Route::get('web/quel-est-le-role-dune-agence-web', 'AgenceWebController@web_comp_4_3')->name('web_comp_4_3');
Route::get('web/quelle-est-la-difference-entre-une-agence-de-communication-et-une-agence-web', 'AgenceWebController@web_comp_4_4')->name('web_comp_4_4');
Route::get('web/combien-coute-une-agence-web', 'AgenceWebController@web_comp_4_5')->name('web_comp_4_5');
// Complémentaires 5
Route::get('web/le-referencement-en-agence-web', 'AgenceWebController@web_comp_5_1')->name('web_comp_5_1');
Route::get('web/la-creation-de-site-web', 'AgenceWebController@web_comp_5_2')->name('web_comp_5_2');
Route::get('web/la-refonte-de-site-web', 'AgenceWebController@web_comp_5_3')->name('web_comp_5_3');

// Complémentaires 2_1
Route::get('web/le-metier-de-webdesigner', 'AgenceWebController@web_comp_2_1_1')->name('web_comp_2_1_1');
Route::get('web/le-metier-de-developpeur-web', 'AgenceWebController@web_comp_2_1_2')->name('web_comp_2_1_2');
Route::get('web/le-metier-de-referenceur-seo', 'AgenceWebController@web_comp_2_1_3')->name('web_comp_2_1_3');
Route::get('web/le-metier-de-community-manager', 'AgenceWebController@web_comp_2_1_4')->name('web_comp_2_1_4');
Route::get('web/le-metier-de-graphiste', 'AgenceWebController@web_comp_2_1_5')->name('web_comp_2_1_5');
Route::get('web/le-metier-de-chef-de-projet', 'AgenceWebController@web_comp_2_1_6')->name('web_comp_2_1_6');
// Complémentaires 3_1
Route::get('web/quel-est-le-meilleur-cms-pour-creer-un-site-web', 'AgenceWebController@web_comp_3_1_1')->name('web_comp_3_1_1');
Route::get('web/comment-faire-un-site-one-page-wordpress', 'AgenceWebController@web_comp_3_1_2')->name('web_comp_3_1_2');
Route::get('web/comparatif-des-differents-cms', 'AgenceWebController@web_comp_3_1_3')->name('web_comp_3_1_3');
// Complémentaires 3_2
Route::get('web/quelle-est-la-difference-entre-un-cms-et-un-framework', 'AgenceWebController@web_comp_3_2_1')->name('web_comp_3_2_1');
Route::get('web/quel-langage-utiliser-pour-le-developpement-web', 'AgenceWebController@web_comp_3_2')->name('web_comp_3_2');
// Complémentaires 5_1
Route::get('web/quest-ce-quune-agence-sea', 'AgenceWebController@web_comp_5_1_1')->name('web_comp_5_1_1');
Route::get('web/quest-ce-quune-agence-seo', 'AgenceWebController@web_comp_5_1_2')->name('web_comp_5_1_2');
// Complémentaires 5_2
Route::get('web/qui-peut-creer-un-site-internet', 'AgenceWebController@web_comp_5_2_1')->name('web_comp_5_2_1');
Route::get('web/comment-creer-un-site-web', 'AgenceWebController@web_comp_5_2_2')->name('web_comp_5_2_2');
Route::get('web/les-differentes-etapes-pour-creer-un-site-web', 'AgenceWebController@web_comp_5_2_3')->name('web_comp_5_2_3');
Route::get('web/comment-rediger-un-projet-de-creation-de-site-web', 'AgenceWebController@web_comp_5_2_4')->name('web_comp_5_2_4');
Route::get('web/quels-sont-les-differents-types-de-site-web', 'AgenceWebController@web_comp_5_2_5')->name('web_comp_5_2_5');
// Complémentaires 5_3
Route::get('web/pourquoi-faire-une-refonte-de-site-web', 'AgenceWebController@web_comp_5_3_1')->name('web_comp_5_3_1');
Route::get('web/quand-refondre-son-site-web', 'AgenceWebController@web_comp_5_3_2')->name('web_comp_5_3_2');
Route::get('web/comment-refondre-son-site-internet', 'AgenceWebController@web_comp_5_3_3')->name('web_comp_5_3_3');
Route::get('web/quels-sont-les-differents-types-de-refonte-web', 'AgenceWebController@web_comp_5_3_4')->name('web_comp_5_3_4');
// Complémentaires 5_2_5
Route::get('web/le-site-e-commerce', 'AgenceWebController@web_comp_5_2_5_1')->name('web_comp_5_2_5_1');
Route::get('web/le-site-vitrine', 'AgenceWebController@web_comp_5_2_5_2')->name('web_comp_5_2_5_2');
// Complémentaires 5_1_1
Route::get('web/comment-faire-du-referencement-payant', 'AgenceWebController@web_comp_5_1_1')->name('web_comp_5_1_1');
Route::get('web/quels-sont-les-differents-types-de-referencement-payant', 'AgenceWebController@web_comp_5_1_2')->name('web_comp_5_1_2');
Route::get('web/quelle-est-la-difference-entre-referencement-naturel-et-payant', 'AgenceWebController@web_comp_5_1_3')->name('web_comp_5_1_3');
// Complémentaires 5_1_2
Route::get('web/quest-ce-que-le-referencement-naturel', 'AgenceWebController@web_comp_5_1_2_1')->name('web_comp_5_1_2_1');
Route::get('web/pourquoi-optimiser-son-referencement-naturel', 'AgenceWebController@web_comp_5_1_2_2')->name('web_comp_5_1_2_2');
Route::get('web/pourquoi-faire-du-referencement-naturel', 'AgenceWebController@web_comp_5_1_2_3')->name('web_comp_5_1_2_3');
Route::get('web/quelles-sont-les-bases-de-la-redaction-web', 'AgenceWebController@web_comp_5_1_2_4')->name('web_comp_5_1_2_4');

// Complémentaires 5_2_5_1
Route::get('web/pourquoi-acheter-un-site-e-commerce', 'AgenceWebController@web_comp_5_2_5_1_1')->name('web_comp_5_2_5_1_1');
Route::get('web/quel-est-le-prix-dun-site-e-commerce', 'AgenceWebController@web_comp_5_2_5_1_2')->name('web_comp_5_2_5_1_2');
Route::get('web/comment-faire-son-propre-site-e-commerce', 'AgenceWebController@web_comp_5_2_5_1_3')->name('web_comp_6_5_1_3');
// Complémentaires 5_2_5_2
Route::get('web/quel-est-le-prix-dun-site-vitrine', 'AgenceWebController@web_comp_5_2_5_2_1')->name('web_comp_5_2_5_2_1');
Route::get('web/pourquoi-acheter-un-site-vitrine', 'AgenceWebController@web_comp_5_2_5_2_2')->name('web_comp_5_2_5_2_2');
Route::get('web/comment-faire-son-propre-site-vitrine', 'AgenceWebController@web_comp_5_2_5_2_3')->name('web_comp_5_2_5_2_3');
