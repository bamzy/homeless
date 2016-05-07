<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //

    public function index()
    {

            $names = ['name one', 'name two', 'name three'];
            $value = 'ooooy';

            return view('pages.home',compact('names','value'));
            return view('pages.home')->with('names',$names);
            return view('pages.home')->with('value',$value);
//            return view('pages.home',compact($names,$value));


    }
}
