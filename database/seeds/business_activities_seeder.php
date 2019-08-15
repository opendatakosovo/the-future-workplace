<?php

use Illuminate\Database\Seeder;

class business_activities_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_activities')->insert([
            'activity_name' => 'Publishing of Computer Games',

        ]);

        DB::table('business_activities')->insert([
            'activity_name' => 'Computer Programming Activities'
        ]);

        DB::table('business_activities')->insert([
            'activity_name' => 'Computer Consultancy Activities'
        ]);
        DB::table('business_activities')->insert([
            'activity_name' => 'Computer Facilities Management Activities’'
        ]);
        DB::table('business_activities')->insert([
            'activity_name' => 'Information Technology And Computer Service'
        ]);
        DB::table('business_activities')->insert([
            'activity_name' => 'Wired Telecommunications Activities'
        ]);
        DB::table('business_activities')->insert([
            'activity_name' => 'Wireless Telecommunication Activities'
        ]);
        DB::table('business_activities')->insert([
            'activity_name' => 'Satellite Telecommunication Activities'
        ]);
        DB::table('business_activities')->insert([
            'activity_name' => 'Other Telecommunication Activities'
        ]);
        DB::table('business_activities')->insert([
            'activity_name' => 'Other Software Publishing'
        ]);
        DB::table('business_activities')->insert([
            'activity_name' => 'Data Processing, Hosting And Related Activities'
        ]);
    }
}
