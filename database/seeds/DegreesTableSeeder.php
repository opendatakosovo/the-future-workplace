<?php

use Illuminate\Database\Seeder;

class DegreesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('degrees')->insert([
            'degree_name' => 'Software Design',

        ]);
        DB::table('degrees')->insert([
            'degree_name' => 'IT & Telecommunication',

        ]);
        DB::table('degrees')->insert([
            'degree_name' => 'Computer Engineering ',

        ]);
        DB::table('degrees')->insert([
            'degree_name' => 'Computer Science',

        ]);
        DB::table('degrees')->insert([
            'degree_name' => 'Database and Software engineering',

        ]);
    }
}
