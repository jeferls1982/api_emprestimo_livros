<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'sigla', 'pais_id', 'deleted_at'];

    public function cidades()
    {
        return $this->hasMany(Cidade::class);
    }
    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }
}
