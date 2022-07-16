<?php

namespace App\Http\Substructure\Services;

use App\Http\Substructure\Interfaces\IRepository;
use App\Http\Substructure\Repositories\PaisRepository;
use App\Http\Substructure\Services\BaseServices;
use App\Models\Pais;
use Illuminate\Http\Request;

class PaisServices  extends BaseServices
{


    public function __construct(Pais $pais, PaisRepository $pais_repository)
    {
        $this->pais_repository = $pais_repository;
        $this->pais = $pais;
    }


    public function store($values)
    {
        $values['nome'] = ucwords($values['nome']) ?? null;
        $values['sigla'] = strtoupper($values['sigla']) ?? null;

        return $this->pais_repository->store($values);
    }
}
