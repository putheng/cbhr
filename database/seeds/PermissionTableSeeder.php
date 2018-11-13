<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
			['name' => 'edit listings'],
			['name' => 'delete listings'],
			['name' => 'create listings'],
		];
		
		foreach($permissions as $value){
            Permission::create($value);
        }
    }
}
