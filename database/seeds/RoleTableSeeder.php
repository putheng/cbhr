<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
			['name' => 'admin'],
			['name' => 'user'],
			['name' => 'publisher'],
			['name' => 'employer'],
		];
		
		foreach($roles as $value){
            Role::create($value);
        }
    }
}
