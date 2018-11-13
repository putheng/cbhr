<?php

use Illuminate\Database\Seeder;

class AgeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $age = [
            ['name' => '18-25'],
            ['name' => '18-35'],
            ['name' => '18-45'],
            ['name' => '18+'],
            ['name' => '25+'],
            ['name' => '35+'],
            ['name' => '45+'],
        ];
        
        \App\Models\Age::insert($age);
    }
}
