<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\Newsletter;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Contact::latest()->paginate(20);
        return view('admin.contact.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      Mail::to("mickael.delpech@gmail.com")->send(new Contact($request->except('_token')));
      $msg = 'Votre message a été envoyé avec succès, <a href="'. ('/') . '"> cliquez ici  </a>  pour revenir à l\'accueil';
      //session()->flash('message', $msg);
      return Redirect::back()->withSuccess($msg);
    }

    public function newsletter(Request $request)
    {
      Mail::to("mickael.delpech@gmail.com")->send(new Newsletter($request->except('_token')));
      $msg = 'Votre message a été envoyé avec succès, <a href="'. ('/') . '"> cliquez ici  </a>  pour revenir à l\'accueil';
      //session()->flash('message', $msg);
      Flashy::message('Welcome Aboard!', 'http://your-awesome-link.com');
      return Redirect::back()->withSuccess($msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Contact::find($id);

        if($message){
            return view('admin.contact.show', compact('message'));
        }else {

            Session::flash('error', 'Contact message not found.');
            return redirect()->route('dashboard');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);

        if($contact){
            $contact->delete();

            Session::flash('success', 'Message deleted successfully');
        }

        return redirect()->back();
    }
}
