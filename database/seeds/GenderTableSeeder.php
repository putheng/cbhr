<?php

use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender = [
            ['name' => 'Male'],
            ['name' => 'Female'],
            ['name' => 'Male-Female'],
        ];
        
        \App\Models\Gender::insert($gender);
    }
}
