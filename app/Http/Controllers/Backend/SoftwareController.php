<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SoftwareRequest;
use App\Repositories\SoftwareRepository;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    //INdex function
    public function index()
    {
        return view('backend.software.index');
    }
    //Create function
    public function create()
    {
        return view('backend.software.create');
    }
    public function store(SoftwareRequest $request)
    {
        SoftwareRepository::storeByRequest($request);
        return back()->with('success', 'Software hass been created!');
    }
}
