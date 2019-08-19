<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);

//        $this->call(business_activities_seeder::class);
//        $this->call(municipalitiesTableSeeder::class);

        $this->call(SkillsDegreesSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(UniDegreesSeeder::class);
        $this->call(UniversitiesTableSeeder::class);
        $this->call(DegreesTableSeeder::class);

    }
}
