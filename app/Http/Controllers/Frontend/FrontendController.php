<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Software;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('forntend.home');
    }
    public function aboutUs(){
        return view('forntend.aboutUs');
    }
    // consultancy method
    public function consultancy(){
        return view('forntend.consultancy');
    }
    // consultancy method
    public function contact(){
        return view('forntend.contact');
    }

    // consultancy method
    public function showSoftware($slug){
        $software = Software::where('slug', $slug)->first();
        return view('forntend.show_software',compact('software'));
    }
    public function staticWebsite(){
        return view('forntend.website.static');
    }
    public function dynamicWebsite(){
        return view('forntend.website.dynamic');
    }
    public function ecommerceWebsite(){
        return view('forntend.website.ecommerce');
    }
    public function newsPortal(){
        return view('forntend.website.news');
    }
    public function json(){
        return view('forntend.test');
    }
}
