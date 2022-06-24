<?php

namespace App\Http\Controllers;


use  App\Http\Substructure\Services\EditoraServices;
use App\Http\Substructure\Repositories\EditoraRepository;


class EditoraController extends BaseController
{    

    public function __construct(EditoraServices $service, EditoraRepository $repository)
    {
        parent::__construct($service, $repository);
    }    
}
