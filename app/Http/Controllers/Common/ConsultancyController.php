<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConsultancyRequest;
use App\Repositories\ConsultancyRepository;
use Illuminate\Http\Request;

class ConsultancyController extends Controller
{
    public function index(){
        return view('backend.consultancy.index');
    }
    public function consultancyStore(ConsultancyRequest $request){
        ConsultancyRepository::storeByRequest($request);
        return back()->with('success', 'Consultancy has been successfully send!');
    }
}
