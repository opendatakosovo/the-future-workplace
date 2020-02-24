<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business_ActivitiesModel extends Model
{
    protected $table = 'business_activities';

    protected $fillable = [
        'activity_name'
    ];
}
