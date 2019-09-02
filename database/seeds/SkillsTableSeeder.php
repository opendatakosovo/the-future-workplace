<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'skill_name' => 'AI and Machine Learning',
        ]);
        DB::table('skills')->insert([
            'skill_name' => 'Computer Graphics',
        ]);
        DB::table('skills')->insert([
            'skill_name' => 'Database Management',
        ]);
        DB::table('skills')->insert([
            'skill_name' => 'Human-Centered Design',
        ]);
        DB::table('skills')->insert([
            'skill_name' => 'Electronics',
        ]);
        DB::table('skills')->insert([
            'skill_name' => 'Mobile Application Development',
        ]);
        DB::table('skills')->insert([
            'skill_name' => 'Networking',
        ]);
        DB::table('skills')->insert([
            'skill_name' => 'Numerical Analysis',
        ]);
        DB::table('skills')->insert([
            'skill_name' => 'Security',
        ]);
        DB::table('skills')->insert([
            'skill_name' => 'Software Engineering',
        ]);
        DB::table('skills')->insert([
            'skill_name' => 'Systems Engineering',
        ]);
        DB::table('skills')->insert([
            'skill_name' => 'Web Engineering',
        ]);
    }
}
