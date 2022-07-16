<?php

namespace App\Http\Controllers;


use  App\Http\Substructure\Services\CidadeServices;
use App\Http\Substructure\Repositories\CidadeRepository;

use Illuminate\Http\Request;

class CidadeController extends BaseController
{

    public function __construct(CidadeServices $service, CidadeRepository $repository)
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
