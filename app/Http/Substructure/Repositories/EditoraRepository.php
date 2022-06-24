<?php

namespace App\Http\Substructure\Repositories;
use App\Models\Editora;
use App\Http\Substructure\Resources\EditoraResource;

class EditoraRepository  extends BaseRepository{

    protected $model = Editora::class;
    protected $resource = EditoraResource::class;
    
    public function __construct(Editora $editora)
    {
       $this->editora = $editora;
    }
}

?>