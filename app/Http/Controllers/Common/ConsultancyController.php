<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConsultancyRequest;
use App\Models\Consultancy;
use App\Repositories\ConsultancyRepository;
use Illuminate\Http\Request;

class ConsultancyController extends Controller
{
    public function index(){
        $consultancies = ConsultancyRepository::getAll();
        return view('backend.consultancy.index',compact('consultancies'));
    }
    public function consultancyStore(ConsultancyRequest $request){
        ConsultancyRepository::storeByRequest($request);
        return back()->with('success', 'Consultancy has been successfully send!');
    }

    public function show(Consultancy $consultancy)
    {
        $consultancy->update([
            'status' => true
        ]);
        return view("backend.consultancy.dtls",compact('consultancy'));
    }
    public function destroy(Consultancy $consultancy)
    {
        $consultancy->delete();
        return back()->with('success', 'Consultancy is deleted successfully!');
    }
}
