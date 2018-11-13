<?php

use App\Models\EmployeeType;
use Illuminate\Database\Seeder;

class EmployeeTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
			['name' => '<10'],
			['name' => '10-30'],
			['name' => '30-50'],
			['name' => '50-100'],
			['name' => '100-200'],
			['name' => '>200'],
			['name' => '>1500'],
		];
		
		foreach($employees as $value){
            EmployeeType::create($value);
        }
    }
}
