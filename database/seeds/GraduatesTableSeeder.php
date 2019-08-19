<?php

use Illuminate\Database\Seeder;

class GraduatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('graduates')->insert([
            'uni_id' => '1',
            'degree_id' => '2',
            'number_of_graduates' => '6235',
            'number_of_males' => '3000',
            'number_of_females' => '3235',
            'year' => '2018',
        ]);
    }
}
