<?php

use Illuminate\Database\Seeder;

class SettingsNavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $navigation  = array(
              'name' => 'Ballina',
              'url' =>  '/home',
              'subs' =>   null
        );

        DB::table('settings')->insert([
            'section' => 'navigation',
            'settings' => ''
        ]);


    }
}
