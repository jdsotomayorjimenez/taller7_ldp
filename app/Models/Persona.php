<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email'];

    public function intereses()
    {
        return $this->belongsToMany(
            Interes::class,
            'interes_persona',
            'persona_id',
            'interes_id'
        );
    }
}