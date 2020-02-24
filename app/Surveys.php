<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surveys extends Model
{
    protected $table = 'survey_response';

    protected $fillable = [
        'name_of_company','skills','type'
    ];
}
