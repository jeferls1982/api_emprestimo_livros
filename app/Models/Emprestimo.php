<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;

    protected $fillable = ['livroId', 'leitorId','data_retirada', 'data_devolucao','status'];



    public function leitor(){
        return $this->belongsTo(Leitor::class, 'leitorId');
    }

    public function livros(){
        return $this->belongsTo(Livro::class, 'livroId');
    }

    
}


