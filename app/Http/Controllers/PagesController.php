<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home() {
        return view( 'pages.index');
    }

    function about() {
        return view( 'pages.about');
    }

    function signup() {
        return view( 'pages.signup');
    }

    function contact() {
        return view( 'pages.contact');
    }

    function  message() {
        return view(  'pages.view message');
    }
    function  logout() {
        return view( 'pages.logout');
    }
    function save(Request $request) {

       $name = $request->name;

      return redirect()->route('thanks',['name' => $name ]);
    }
    function thanks($name, Request $request) {

        return view('pages.thankyou')->with(compact('name'));
    }
}

