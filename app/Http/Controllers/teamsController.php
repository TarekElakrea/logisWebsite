<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teamsController extends Controller
{
    public function index(){
        return view('wepsite-pages.team.index');
    }
}
