<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table = 'eventos';

    protected $fillable = [
        'nome_evento',
        'tipo_evento',
        'capa_url',
    ];

    protected $casts = [
        'data_registro' => 'datetime',
    ];

    public function galeria()
    {
        return $this->hasMany(Galeria::class, 'evento_id', 'id');
    }

}
