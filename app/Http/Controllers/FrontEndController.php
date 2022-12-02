<?php

namespace App\Http\Controllers;

use Session;
use App\Tag;
use App\User;
use App\Post;
use App\Contact;
use App\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){
        $posts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->take(3)->get();
        $title = "Lyneo, l'agence web qui libère votre plein potentiel";
        $meta_description = "L'agence Lyneo est une agence de marketing numérique 360. Nous fournissons des services de création Web, SEO, SEA, médias sociaux";
        return view('website.home', compact('posts', 'title', 'meta_description'));
    }

    public function blog(){

      $title = "Le blog de l'actualité digitale - Lyneo";
      $meta_description = "Venez suivre toute l'actualité digitale sur le blog de notre agence. Toutes les informations sur l’univers du SEO, des réseaux sociaux, WordPress et de la création de sites web.";

      $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
      $random_3_posts = Post::all()->random(3);
      $categories = Category::all();

      return view('website.blog', compact('posts','categories','random_3_posts', 'title', 'meta_description'));
  }

    public function about(){
        $user = User::first();

        return view('website.about', compact('user'));
    }

    public function category($slug){


        $category = Category::where('slug', $slug)->first();
        if($category){
          $title = "$category->name | Le blog de l'actualité digitale | Lyneo";
          $meta_description = "Venez suivre toute l'actualité digitale sur le blog de notre agence. Toutes les informations sur l’univers du SEO, des réseaux sociaux, WordPress et de la création de sites web.";

            $posts = Post::where('category_id', $category->id)->paginate(9);

            return view('website.category', compact(['category', 'posts', 'title', 'meta_description']));
        }else {
            return redirect()->route('home');
        }
    }

    public function contact(){
      $title = "Contacter l'agence de marketing Web Lyneo | Demander plus d'informations";
      $meta_description = "Pour tous vos besoins en matière de web, l'agence de marketing web Lyneo vous propose des services de référencement, de médias sociaux, de conception de sites web, de publicité payante, etc.";
        return view('website.contact', compact('title', 'meta_description'));
    }

    public function post($category, $slug){

      $post = Post::where('slug', $slug)->first();
      $title = $post->title;
      $meta_description = $post->meta;
      $random_3_posts = Post::all()->random(3);
      $random_2_posts = Post::all()->random(2);
      $categories = Category::all();

      return view('website.post', compact('random_3_posts', 'random_2_posts', 'categories', 'post', 'title','meta_description'));
    }

    public function send_message(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:200',
            'email' => 'required|email|max:200',
            'subject' => 'required|max:255',
            'message' => 'required|min:100',
        ]);

        $contact = Contact::create($request->all());

        Session::flash('message-send', 'Contact message send successfully');
        return redirect()->back();
    }

    public function developpement(){
      $title = "Développement de sites Web professionnels | Agence de conception de sites Web";
      $meta_description = "Si vous ne possédez pas un site Web personnalisé qui contribue directement développer vos ventes, vous passez à côté de quelque chose. Contactez notre équipe web dès aujourd'hui !";

      return view('website.developpement', compact('title', 'meta_description'));
    }

    public function wordpress(){
      $title = "Conception de sites Web WordPress | Experts en création de sites Web WordPress";
      $meta_description = "Créez un site Web convivial et optimisé pour le référencement de votre marque et augmentez vos ventes grâce aux services de conception Web WordPress personnalisés de Lyneo.";

      return view('website.wordpress', compact('title', 'meta_description'));
    }

    public function commerce(){
      $title = "Services de conception de sites Web personnalisés | Agence de création de sites Web personnalisés";
      $meta_description = "Améliorez votre classement et générez du trafic ciblé grâce à une conception web professionnelle personnalisée adaptée à votre entreprise.";

      return view('website.commerce', compact('title', 'meta_description'));
    }

    public function custom(){
      $title = "Services de conception de sites Web E-commerce | Agence de développement de sites Web E-commerce";
      $meta_description = "Lyneo est une agence de création de sites E-commerce qui construit et commercialise votre boutique. Nous créons des sites de e-commerce personnalisés qui convertissent les visiteurs en acheteurs.";

      return view('website.custom', compact('title', 'meta_description'));
    }

    public function marketing(){
      $title = "Services de marketing numérique | Lyneo agence de marketing web";
      $meta_description = "Lyneo fournit des services de marketing numérique aux entreprises Françaises. Contactez-nous dès aujourd'hui pour en savoir plus sur les services qui peuvent aider votre entreprise à se développer.";

      return view('website.marketing-digital', compact('title', 'meta_description'));
    }

    public function seo(){
      $title = "Agence SEO | Services d'optimisation pour les moteurs de recherche";
      $meta_description = "Agence de référencement Web : Lyneo aide les entreprises de toutes tailles dans leur stratégie SEO et leur visibilité sur Internet.";

      return view('website.seo', compact('title', 'meta_description'));
    }

    public function seo_local(){
      $title = "Société de référencement local - Agence de référencement SEO local";
      $meta_description = "Laissez Lyneo améliorer votre visibilité dans les recherches locales grâce à nos services efficaces de SEO local pour les petites et moyennes entreprises.";

      return view('website.seo-local', compact('title', 'meta_description'));
    }

    public function seo_technique(){
      $title = "Agence de SEO technique - Services professionnels de SEO technique";
      $meta_description = "Améliorez votre classement et construisez votre site Web sur des bases solides grâce à des tactiques de SEO technique pensées pour l'utilisateur";

      return view('website.seo-technique', compact('title', 'meta_description'));
    }

    public function ppc(){
      $title = "Agence de publicité Web | Les meilleurs services de marketing PPC";
      $meta_description = "Développez votre entreprise et élargissez votre champ d'action grâce à des campagnes et des services de marketing PPC optimisés et basés sur des données.";

      return view('website.ppc', compact('title', 'meta_description'));
    }

    // BORDEAUX

    public function marketing_digital_bordeaux(){

      $title = "Agence marketing numérique à Bordeaux | SEA, PPC, SEO | Lyneo Bordeaux";
      $meta_description = "Lyneo, agence marketing Web à Bordeaux spécialisée en médias sociaux, publicité en ligne, SEO et stratégie Web. Au service de votre croissance !";

      return view('website.bordeaux.marketing', compact('title', 'meta_description'));
    }

    public function seo_bordeaux(){

      $title = "Agence SEO à Bordeaux - Référencement Web | Lyneo";
      $meta_description = "Lyneo est votre agence SEO à Bordeaux. Augmentez votre trafic organique en améliorant votre positionnement sur les moteurs de recherche !";

      return view('website.bordeaux.seo', compact('title', 'meta_description'));
    }

    public function web_bordeaux(){

      $title = "Bordeaux création de site web | Développement de site internet";
      $meta_description = "Vous envisagez une conception de site web? Notre agence de développement web à Bordeaux est à votre service.";

      return view('website.bordeaux.web', compact('title', 'meta_description'));
    }

    // PERIGUEUX

    public function marketing_digital_perigueux(){

      $title = "Agence marketing numérique à Périgueux | SEA, PPC, SEO | Lyneo Périgueux";
      $meta_description = "Lyneo, agence marketing Web à Périgueux spécialisée en médias sociaux, publicité en ligne, SEO et stratégie Web. Au service de votre croissance !";

      return view('website.perigueux.marketing', compact('title', 'meta_description'));
    }

    public function seo_perigueux(){

      $title = "Agence SEO à Périgueux - Référencement Web | Lyneo";
      $meta_description = "Lyneo est votre agence SEO à Périgueux. Augmentez votre trafic organique en améliorant votre positionnement sur les moteurs de recherche !";

      return view('website.perigueux.seo', compact('title', 'meta_description'));
    }

    public function web_perigueux(){

      $title = "Périgueux création de site web | Développement de site internet";
      $meta_description = "Vous envisagez une conception de site web? Notre agence de développement web à Périgueux est à votre service.";

      return view('website.perigueux.web', compact('title', 'meta_description'));
    }
}
