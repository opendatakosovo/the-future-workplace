<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 9/20/2019
 * Time: 1:42 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class HighSchool extends Model
{

    protected $table = 'high_school_grads';

    protected $fillable = [
        'school', 'municipality', 'profile', 'year', 'grade', 'male', 'female'
    ];
}