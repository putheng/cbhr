<?php

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $educations = [
			['name' => 'Associate\'s Degree'],
			['name' => 'Bachelor Degree'],
			['name' => 'Doctor Degree'],
			['name' => 'High School'],
			['name' => 'Master Degree'],
			['name' => 'Others'],
			['name' => 'Professional Degree'],
		];
		
		foreach($educations as $value){
            Education::create($value);
        }
    }
}
