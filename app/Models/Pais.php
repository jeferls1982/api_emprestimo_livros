<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = "paises";
    protected $fillable = ['nome', 'sigla', 'deleted_at'];




    public function estados()
    {
        return $this->hasMany(Estado::class);
    }

    public function cidades()
    {
        return $this->hasManyThrough(
            Cidade::class,
            Estado::class
        );
    }
}
