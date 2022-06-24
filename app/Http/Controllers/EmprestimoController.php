<?php

namespace App\Http\Controllers;


use  App\Http\Substructure\Services\EmprestimoServices;
use App\Http\Substructure\Repositories\EmprestimoRepository;


class EmprestimoController extends BaseController
{    

    public function __construct(EmprestimoServices $service, EmprestimoRepository $repository)
    {
        parent::__construct($service, $repository);
    }    
}
