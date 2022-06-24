<?php

namespace App\Http\Controllers;


use  App\Http\Substructure\Services\LivroServices;
use App\Http\Substructure\Repositories\LivroRepository;


class LivroController extends BaseController
{
    

    public function __construct(LivroServices $service, LivroRepository $repository)
    {
        parent::__construct($service, $repository);
    }
    
    
    

    
}