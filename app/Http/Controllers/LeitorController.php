<?php

namespace App\Http\Controllers;


use  App\Http\Substructure\Services\LeitorServices;
use App\Http\Substructure\Repositories\LeitorRepository;


class LeitorController extends BaseController
{
    

    public function __construct(LeitorServices $service, LeitorRepository $repository)
    {
        parent::__construct($service, $repository);
    }
    
    
    

    
}