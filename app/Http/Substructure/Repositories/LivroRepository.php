<?php

namespace App\Http\Substructure\Repositories;
use App\Models\Livro;
use App\Http\Substructure\Resources\LivroResource;

class LivroRepository  extends BaseRepository{

    protected $model = Livro::class;
    protected $resource = LivroResource::class;

    protected $orderBy = "nome";
    protected $orderByType = "desc";
    
    public function __construct(Livro $livro)
    {
       $this->livro = $livro;
    }
    




}










?>