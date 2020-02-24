<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillsDegrees extends Model
{
    protected $table = 'skills_degrees';

    protected $fillable = [
        'skill_id','degree_id'
    ];
}
