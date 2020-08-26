<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard(){
        return view('pages.dashboard');
    }

    public function purchase(){
        return view('pages.purchase');
    }

    public function sales(){
        return view('pages.sales');
    }
}
