<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('portfolio.index');
    }
    public function admin(){
        return view('portfolio.admin');
    }
     
}
