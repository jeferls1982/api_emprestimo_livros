<?php

namespace App\Http\Substructure\Services;

use App\Http\Substructure\Repositories\EstadoRepository;
use App\Http\Substructure\Services\BaseServices;
use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoServices  extends BaseServices
{


    public function __construct(Estado $estado, EstadoRepository $estado_repository)
    {
        $this->estado_repository = $estado_repository;
        $this->estado = $estado;
    }


    public function store($values)
    {
        $values['nome'] = ucwords($values['nome']) ?? null;
        $values['sigla'] = strtoupper($values['sigla']) ?? null;

        return $this->estado_repository->store($values);
    }
}
