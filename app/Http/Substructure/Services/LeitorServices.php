<?php

namespace App\Http\Substructure\Services;

use App\Http\Substructure\Services\BaseServices;
use App\Models\Leitor;

class LeitorServices  extends BaseServices{

    
    public function __construct(Leitor $leitor)
    {
        $this->leitor = $leitor;
    }
    




}






?>