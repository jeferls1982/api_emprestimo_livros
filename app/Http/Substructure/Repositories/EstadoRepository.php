<?php

namespace App\Http\Substructure\Repositories;
use App\Models\Estado;
use App\Http\Substructure\Resources\EstadoResource;
use Illuminate\Http\Request;

class EstadoRepository  extends BaseRepository{

    protected $model = Estado::class;
    protected $orderBy = "nome";
    protected $resource = EstadoResource::class;
    
    public function __construct(Estado $estado)
    {
       $this->estado = $estado;
    }

   
    
}
