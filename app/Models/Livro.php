<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'editoraId','qtd'];



    public function editora(){
        return $this->belongsTo(Editora::class, 'editoraId');
    }
}
