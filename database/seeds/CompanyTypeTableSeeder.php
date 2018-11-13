<?php

use App\Models\CompanyType;
use Illuminate\Database\Seeder;

class CompanyTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
			['name' => 'Charity/Non-Profit Organization'],
			['name' => 'General Partnership'],
			['name' => 'Goverment Organization'],
			['name' => 'Listed Company'],
			['name' => 'Multi-National Company'],
			['name' => 'Non-goverment Organization'],
			['name' => 'Others'],
			['name' => 'Private Limited Company'],
			['name' => 'Public Limited Company'],
			['name' => 'Sole Proprietorship'],
			['name' => 'State Company'],
			['name' => 'State Joint Venture Company'],
		];
		
		foreach($types as $value){
            CompanyType::create($value);
        }
    }
}
