<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        $data= array(
            'title'=>'Services',
            'services'=>['News Feed','Like','Comment']
        );
        return view('pages.services')->with($data);
    }
}
