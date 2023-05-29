<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\User;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function home() 
    {
        return view ('home', [
            'title' => 'SkaMedia',
        ]);
    }

    public function market()
    {
        return view('market', [
            'title' => 'SkaMedia',
            'market' => Market::latest()->get()
        ]);
    }

    public function detail(Market $market)
    {
        return view('detail', [
            'title' => 'SkaMedia',
            'detail' => $market,
            'market' => Market::latest()->get()
        ]);
    }

    public function mypost(User $user)
    {
        return view('mypost', [
            'title' => 'SkaMedia',
            'profile' => $user,
            'market' => Market::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
