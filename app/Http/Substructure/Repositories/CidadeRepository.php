<?php

namespace App\Http\Substructure\Repositories;

use App\Models\Cidade;
use App\Http\Substructure\Resources\CidadeResource;


class CidadeRepository  extends BaseRepository
{

    protected $model = Cidade::class;
    protected $orderBy = "nome";
    protected $resource = CidadeResource::class;

    public function __construct(Cidade $cidade)
    {
        $this->cidade = $cidade;
    }
}
