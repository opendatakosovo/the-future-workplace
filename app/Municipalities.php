<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipalities extends Model
{
    protected $table = 'municipalities';

    protected $fillable = [
        'municipality'
    ];
}
