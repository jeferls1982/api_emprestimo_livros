<?php

namespace App\Http\Substructure\Services;

use App\Http\Substructure\Services\BaseServices;
use App\Models\Livro;

class LivroServices  extends BaseServices{

    
    public function __construct(Livro $livro)
    {
        $this->livro = $livro;
    }
    




}






?>