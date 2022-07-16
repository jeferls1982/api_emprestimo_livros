<?php

namespace App\Http\Controllers;


use  App\Http\Substructure\Services\PaisServices;
use App\Http\Substructure\Repositories\PaisRepository;
use App\Http\Substructure\Resources\PaisResource;
use Illuminate\Http\Request;

class PaisController extends BaseController
{

    public function __construct(PaisServices $service, PaisRepository $repository)
    {
        parent::__construct($service, $repository);
        $this->service = $service;
    }

    public function store(Request $request)
    {
        $sanitized = $request->all();
        return $this->service->store($sanitized);
    }
}
