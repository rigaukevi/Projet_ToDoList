<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class LinkController extends Controller{

    public function registerLink(){
        return view('auth/register');

    }

    public function aboutLink(){
        return view('layouts/about');

    }

    public function homeLink(){
        return view('welcome');

    }

    public function loginLink(){
        return view('auth/login');

    }





}