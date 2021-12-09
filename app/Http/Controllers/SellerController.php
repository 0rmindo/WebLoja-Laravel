<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    //pagina home
    public function index()
    {
        return view('site.home.seller');
    }
    //pagina de login
    public function login()
    {
        return view('site.login.seller');
    }
    //pagina de singup
    public function singup()
    {
        return view('site.singup.seller');
    }

}
