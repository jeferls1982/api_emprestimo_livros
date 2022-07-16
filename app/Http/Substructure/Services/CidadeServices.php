<?php

namespace App\Http\Substructure\Services;

use App\Http\Substructure\Repositories\CidadeRepository;
use App\Http\Substructure\Services\BaseServices;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeServices  extends BaseServices
{


    public function __construct(Cidade $cidade, CidadeRepository $cidade_repository)
    {
        $this->cidade_repository = $cidade_repository;
        $this->cidade = $cidade;
    }


    public function store($values)
    {
        $values['nome'] = ucwords($values['nome']) ?? null;
        $values['sigla'] = strtoupper($values['sigla']) ?? null;

        return $this->cidade_repository->store($values);
    }
}
