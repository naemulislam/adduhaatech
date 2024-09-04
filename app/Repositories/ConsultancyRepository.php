<?php

namespace App\Repositories;

use App\Http\Requests\ConsultancyRequest;
use App\Models\Consultancy;
use Arafat\LaravelRepository\Repository;

class ConsultancyRepository extends Repository
{
    public static function model()
    {
        return Consultancy::class;
    }

    public static function storeByRequest(ConsultancyRequest $request)
    {
       $consultancyCreate = self::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'service_category' => $request->service_category,
            'service_details' => $request->service_details,
       ]);
       return $consultancyCreate;
    }
}
