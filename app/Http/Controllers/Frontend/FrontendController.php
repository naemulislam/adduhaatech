<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('forntend.home');
    }
    // consultancy method
    public function consultancy(){
        return view('forntend.consultancy');
    }
}
