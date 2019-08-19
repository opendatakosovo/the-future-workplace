<?php

use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            'institution_name' => 'University of Prizren',
            'institution_type' => 'Public',
            'municipality' => 'Prizren'
        ]);
        DB::table('universities')->insert([
            'institution_name' => 'University of Prishtina',
            'institution_type' => 'Public',
            'municipality' => 'Prishtina'
        ]);
        DB::table('universities')->insert([
            'institution_name' => 'AAB ',
            'institution_type' => 'Private',
            'municipality' => 'Prishtina'
        ]);
        DB::table('universities')->insert([
            'institution_name' => 'American University of Kosovo',
            'institution_type' => 'Private',
            'municipality' => 'Prishtina'
        ]);
        DB::table('universities')->insert([
            'institution_name' => 'Iliria Royal University',
            'institution_type' => 'Private',
            'municipality' => 'Prishtina'
        ]);

    }
}
