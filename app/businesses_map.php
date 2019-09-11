<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class businesses_map extends Model
{

    protected $table = 'businesses_map';

    protected $fillable = [
        'name_of_business', 'status', 'fiscal_number','business_type','capital','number_of_employees','owners','owners_gender','authorized_persons','date_of_registration','link_of_arbk','registration_number','municipality','activities'
    ];




}
