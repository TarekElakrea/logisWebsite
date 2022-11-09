<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function index(){
        return view('wepsite-pages.Portfolio.index');
    }

    public function read($id){
        return view('wepsite-pages.PortfolioDetails.index');
    }
}
