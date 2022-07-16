<?php

namespace App\Http\Controllers;


use  App\Http\Substructure\Services\EstadoServices;
use App\Http\Substructure\Repositories\EstadoRepository;

use Illuminate\Http\Request;

class EstadoController extends BaseController
{

    public function __construct(EstadoServices $service, EstadoRepository $repository)
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
