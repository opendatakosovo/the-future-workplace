<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class businesses_map extends Model
{

    protected $table = 'businesses_map';

    protected $fillable = [
        'municipality', 'publishing_of_computer_games', 'computer_programming_activities','computer_facilities_management_activities','computer_facilities_management_activities','wired_telecommunications_activities','wireless_telecommunication_activities','satellite_telecommunication_activities','other_telecommunication_activities','other_software_publishing','data_processing_hosting_and_related_activities','total'
    ];




}
