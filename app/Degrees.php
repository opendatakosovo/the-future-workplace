<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/16/2019
 * Time: 9:43 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degrees extends Model
{
    protected $table = 'degrees';

    protected $fillable = [
        'degree_name','school_id','skills'
    ];

}
