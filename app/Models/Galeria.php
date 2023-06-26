<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $table = 'galeria';

    protected $fillable = [
      'image_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'evento_id', 'id');
    }

}
