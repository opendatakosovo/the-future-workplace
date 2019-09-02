<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universities extends Model
{
    protected $table = 'universities';

    protected $fillable = [
        'uni_name', 'uni_type'
    ];
}
