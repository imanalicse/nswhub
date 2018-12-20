<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to NSW';
        //return view("pages.index", compact('title'));
        return view("pages.index")->with('title', $title);
    }

    public function customerList()
    {   
        $title = 'Welcome to NSW';
        $data = array(
            'name'=> 'Iman',
            'email'=>'iman@bitmascot.com'
        );
        return view("pages.customer-list", compact('data'));
    }
}
