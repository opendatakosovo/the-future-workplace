<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduates extends Model
{
    protected $table = 'graduates';

    protected $fillable = [
        'school_id','grade','degree_id','number_of_graduates','number_of_males','number_of_females','year'
    ];
}
