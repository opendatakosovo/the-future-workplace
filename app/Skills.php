<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $table = 'skills';

    protected $fillable = [
        'id','skill_name'
    ];
}
