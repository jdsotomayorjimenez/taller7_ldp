<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interes extends Model
{
    use HasFactory;

    protected $table = 'intereses';

    protected $fillable = ['nombre', 'descripcion'];

    public function personas()
    {
        return $this->belongsToMany(
            Persona::class,
            'interes_persona',
            'interes_id',
            'persona_id'
        );
    }
}