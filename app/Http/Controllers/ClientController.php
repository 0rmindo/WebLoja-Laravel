<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index()
    {
        return view('site.home.client');
    }

    public function login()
    {
        return view('site.login.client');
    }
    
    public function singup()
    {
        return view('site.singup.client');      
    }

}
