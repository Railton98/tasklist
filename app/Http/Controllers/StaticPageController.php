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
