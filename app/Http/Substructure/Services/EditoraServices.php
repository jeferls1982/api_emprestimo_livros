<?php

namespace App\Http\Substructure\Services;

use App\Http\Substructure\Services\BaseServices;
use App\Models\Editora;

class EditoraServices  extends BaseServices{

    
    public function __construct(Editora $editora)
    {
        $this->editora = $editora;
    }
    




}






?>