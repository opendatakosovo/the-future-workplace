<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 9/20/2019
 * Time: 10:45 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Atk extends Model
{

    protected $table = 'atk_data';

    protected $fillable = [
        'regjioni', 'komuna', 'ent_activity_no', 'aktiviteti', 'tper_year', 'qarkullimi_total', 'mesatare_qarkullimit', 'kategoria', 'nr_kompanive', 'nr_puntoreve_ne_kompani', 'nr_puntoreve_total'
    ];
}

