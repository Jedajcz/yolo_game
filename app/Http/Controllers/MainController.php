<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function profile()
    {
        return view('profile');
    }

    public function setting()
    {
        return view('setting');
    }
    public function buyrobots()
    {
        return view('buyrobots');
    }
    public function store()
    {
        return view('store');
    }
    public function market()
    {
        return view('market');
    }
    public function exchange()
    {
        return view('exchange');
    }
    public function partners()
    {
        return view('partners');
    }
}
