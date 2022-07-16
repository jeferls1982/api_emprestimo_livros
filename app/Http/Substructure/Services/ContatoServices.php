<?php

namespace App\Http\Substructure\Services;

use App\Http\Substructure\Services\BaseServices;
use App\Models\Contato;

class ContatoServices  extends BaseServices{

    
    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }
    




}






?>