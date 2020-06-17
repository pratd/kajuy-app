<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesViewController extends Controller
{
    public function index(){
        return view('pages.welcome');
    }
    public function categories(){
        return view('pages.categories');
    }
    public function profile(){
        return view('pages.profile');
    }
}
