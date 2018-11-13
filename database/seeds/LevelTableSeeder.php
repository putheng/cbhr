<?php

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [
			['name' => 'Entry Level'],
			['name' => 'Middle'],
			['name' => 'Senior'],
			['name' => 'Top'],
			['name' => 'Fresh Graduate'],
		];
		
		foreach($levels as $value){
            Level::create($value);
        }
    }
}
