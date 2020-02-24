<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universities extends Model
{
    protected $table = 'schools';

    protected $fillable = [
        'school_name', 'school_type','is_high_school','municipality'
    ];
}
