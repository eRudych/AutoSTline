<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageEnController extends Controller
{
    function main(){
        return view('en.main');
    }
    
    function services(){
        return view('en.services');
    }
    
    function products(){
        return view('en.products');
    }
    
    function about(){
        return view('en.about');
    }
    
    function partners(){
        return view('en.partners');
    }
}