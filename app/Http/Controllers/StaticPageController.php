<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      $name = $request->name;
      $email = $request->email;
      $phone = $request->phone;
      $message = $request->message;
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
