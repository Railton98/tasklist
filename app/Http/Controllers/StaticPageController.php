<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Mail\ContactMail;

class StaticPageController extends Controller
{
    public function getHome()
    {
      return view('website.home');
    }

    public function getContact()
    {
      return view('website.contact');
    }

    public function postContact(Request $request)
    {
      $fields = $request->validate([
        'name' => 'required|between:3,50|',
        'email' => 'required|email|between:5,50',
        'phone' => 'required|numeric',
        'bodyMessage' => 'required|min:5'
      ]);

      Mail::to('railtonleal98@gmail.com')->send(new ContactMail($fields));

      Session::flash('success', 'Obrigado, email enviado com Sucesso!');

      return redirect()->route('contact');
    }

    public function getAbout()
    {
      $name = 'Railton Teck\'s';
      $email = 'teck@teck.com';

      $teck  = [
        'name' => $name,
        'email' => $email,
      ];

      return view('website.about', compact('teck'));
    }

}
