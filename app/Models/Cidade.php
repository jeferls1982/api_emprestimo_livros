<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'sigla', 'estado_id', 'deleted_at'];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function estado_pais()
    {
        return $this->belongsTo(Estado::class, "estado_id")->with("pais");
    }

    public function pais()
    {
        return $this->hasOneThrough(
            Pais::class,
            Estado::class,
            "pais_id",
            "id",
            "estado_id"
        );
    }
}
