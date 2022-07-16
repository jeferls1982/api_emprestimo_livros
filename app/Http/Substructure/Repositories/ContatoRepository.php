<?php

namespace App\Http\Substructure\Repositories;
use App\Models\Contato;
use App\Http\Substructure\Resources\ContatoResource;

class ContatoRepository  extends BaseRepository{

    protected $model = Contato::class;
    protected $orderBy = "nome";
    protected $resource = ContatoResource::class;
    
    public function __construct(Contato $contato)
    {
       $this->contato = $contato;
    }
}

?>