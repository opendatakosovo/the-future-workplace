<?php

use Illuminate\Database\Seeder;

class UniDegreesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities_degrees')->insert([
            'uni_id' => '1',
            'degree_id' => '1'
        ]);
        DB::table('universities_degrees')->insert([
            'uni_id' => '1',
            'degree_id' => '2'
        ]);
        DB::table('universities_degrees')->insert([
            'uni_id' => '2',
            'degree_id' => '3'
        ]);
        DB::table('universities_degrees')->insert([
            'uni_id' => '2',
            'degree_id' => '1'
        ]);
        DB::table('universities_degrees')->insert([
            'uni_id' => '4',
            'degree_id' => '5'
        ]);
        DB::table('universities_degrees')->insert([
            'uni_id' => '5',
            'degree_id' => '2'
        ]);
        DB::table('universities_degrees')->insert([
            'uni_id' => '5',
            'degree_id' => '4'
        ]);
    }
}
