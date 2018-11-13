<?php

use App\Models\Term;
use Illuminate\Database\Seeder;

class TermTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terms = [
			['name' => 'Full Time'],
			['name' => 'Part Time'],
			['name' => 'Temporary'],
			['name' => 'Internship'],
			['name' => 'Contract'],
		];
		
		foreach($terms as $value){
            Term::create($value);
        }
    }
}
