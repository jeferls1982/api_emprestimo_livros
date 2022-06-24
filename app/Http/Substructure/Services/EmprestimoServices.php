<?php

namespace App\Http\Substructure\Services;

use App\Http\Substructure\Services\BaseServices;
use App\Models\Emprestimo;

class EmprestimoServices  extends BaseServices{

    
    public function __construct(Emprestimo $emprestimo)
    {
        $this->emprestimo = $emprestimo;
    }
    




}






?>