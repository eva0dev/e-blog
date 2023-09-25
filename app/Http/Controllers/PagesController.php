<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title= 'Welcome to Larvel';
        return view('pages.index',compact('title'));
        //return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title= 'About Us';
       return view('pages.about')->with('title', $title);
       //return view('pages.about',compact('title'));
    }
    public function services(){
        $title= 'SERVICES';
        $services= ['web','seo','programming'];
       return view('pages.services',compact(['title','services']));
    }
}
