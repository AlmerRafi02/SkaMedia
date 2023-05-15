<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function home() 
    {
        return view ('home', [
            'title' => 'SkaMedia'
        ]);
    }

    public function market()
    {
        return view('market', [
            'title' => 'SkaMedia'
        ]);
    }

    public function detail()
    {
        return view('detail', [
            'title' => 'SkaMedia'
        ]);
    }

    public function mypost()
    {
        return view('mypost', [
            'title' => 'SkaMedia'
        ]);
    }
}
