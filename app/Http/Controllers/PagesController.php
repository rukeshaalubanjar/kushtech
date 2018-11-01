<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
    public function getIndex(){
        return view('welcome');

    }
    public function getabout(){
        $email='plutotech9@gmail.com';
        return view('about')->withEmail($email);

    }

    public function getcontact(){
        return view('contact');

    }

}

