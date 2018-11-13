<?php

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiences = [
            ['name' => 'Less than 1'],
            ['name' => '1+ to 2'],
            ['name' => '2+ to 5'],
            ['name' => '5+ to 7'],
            ['name' => '7+ to 10'],
            ['name' => 'More than 10'],
        ];
        
        foreach($experiences as $value){
            Experience::create($value);
        }
        
    }
}
