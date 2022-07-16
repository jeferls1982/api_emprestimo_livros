<?php

namespace App\Http\Controllers;


use  App\Http\Substructure\Services\ContatoServices;
use App\Http\Substructure\Repositories\ContatoRepository;


class ContatoController extends BaseController
{    

    public function __construct(ContatoServices $service, ContatoRepository $repository)
    {
        parent::__construct($service, $repository);
    }    
}
