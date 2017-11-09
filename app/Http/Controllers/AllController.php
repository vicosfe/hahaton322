<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public  function lkcommunity(){

        return view('lk.community');
    }
    public  function lkpredmets(){

        return view('lk.predmets');
    }
    public  function lkpractics(){

        return view('lk.practics');
    }
    public  function lkachivment(){

        return view('lk.achivment');
    }
    public  function lktest(){

        return view('lk.test');
    }
    public  function form(){

        return view('form');
    }
    public  function reg(){

        return view('reg');
    }

}
