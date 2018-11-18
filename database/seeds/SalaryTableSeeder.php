<?php

use App\Models\Salary;
use Illuminate\Database\Seeder;

class SalaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salaries = [
			['name' => 'Negotiable'],
            ['name' => '<$200'],
			['name' => '$200-$500'],
			['name' => '$500-$999'],
			['name' => '$1000-$2000'],
			['name' => '>$2000'],
			['name' => '>$6000'],
		];
		
		foreach($salaries as $value){
            Salary::create($value);
        }
    }
}
