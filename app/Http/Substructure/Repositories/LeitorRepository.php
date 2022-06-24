<?php

namespace App\Http\Substructure\Repositories;
use App\Models\Leitor;
use App\Http\Substructure\Resources\LeitorResource;

class LeitorRepository  extends BaseRepository{

    protected $model = Leitor::class;
    protected $resource = LeitorResource::class;
    //protected $orderBy = "nome";
    //protected $orderByType = "desc";
    
    public function __construct(Leitor $leitor)
    {
       $this->leitor = $leitor;
    }
    




}










?>