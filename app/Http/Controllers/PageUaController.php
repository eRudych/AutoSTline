<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageUaController extends Controller
{
    function main(){
        return view('ua.main');
    }
    
    function services(){
        return view('ua.services');
    }
    
    function products(){
        return view('ua.products');
    }
    
    function about(){
        return view('ua.about');
    }
    
    function partners(){
        return view('ua.partners');
    }
}