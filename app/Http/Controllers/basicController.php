<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basicController extends Controller
{
    public function index()
    {
        return view('home', ['name' => 'Finn']);
    }
    public function contact()
    {
        return view('contact');
    }
    public function login()
    {
        return view('login');
    }
}
