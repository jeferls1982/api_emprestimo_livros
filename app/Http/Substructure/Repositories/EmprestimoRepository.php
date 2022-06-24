<?php

namespace App\Http\Substructure\Repositories;
use App\Models\Emprestimo;
use App\Http\Substructure\Resources\EmprestimoResource;

class EmprestimoRepository  extends BaseRepository{

    protected $model = Emprestimo::class;
    protected $resource = EmprestimoResource::class;
    
    public function __construct(Emprestimo $emprestimo)
    {
       $this->emprestimo = $emprestimo;
    }
}

?>