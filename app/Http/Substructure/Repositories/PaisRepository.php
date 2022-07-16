<?php

namespace App\Http\Substructure\Repositories;
use App\Models\Pais;
use App\Http\Substructure\Resources\PaisResource;
use Illuminate\Http\Request;

class PaisRepository  extends BaseRepository{

    protected $model = Pais::class;
    protected $orderBy = "nome";
    protected $resource = PaisResource::class;
    
    public function __construct(Pais $pais)
    {
       $this->pais = $pais;
    }

   
    
}

?>