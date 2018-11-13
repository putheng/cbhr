<?php

use App\Models\Industry;
use Illuminate\Database\Seeder;

class IndustryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industries = [
			['name' => 'Accounting/Audit/Tax Services'],
			['name' => 'Advertising/Media/Publishing/Printing'],
			['name' => 'Agriculture/Foresty/Fishing'],
			['name' => 'Airline'],
			['name' => 'Architecture/Building/Construction'],
			['name' => 'Automotive - Vehicle'],
			['name' => 'Banking & Finance'],
			['name' => 'Catering'],
			['name' => 'Chemical/Plastic/Paper/Petrochemical'],
			['name' => 'Civil Services'],
			['name' => 'Clothing/Garment/Textile'],
			['name' => 'Cosmetics & Beauty'],
			['name' => 'Education'],
			['name' => 'Electronics/Electrical/Mechanical Equipment'],
			['name' => 'Energy/Power/Water/Oil & Gas'],
			['name' => 'Engineering'],
			['name' => 'Entertainment'],
			['name' => 'Food & Beverages'],
			['name' => 'General Business Services'],
			['name' => 'Health/Personal Care'],
			['name' => 'Hotel/Hospitality'],
			['name' => 'Human Resources/Consultancy'],
			['name' => 'Industrial Machinery/Automation Equipment'],
			['name' => 'Information Technology'],
			['name' => 'Insurance'],
			['name' => 'Jewellery/Gems/Watches'],
			['name' => 'Legal Services'],
			['name' => 'Logistics/Freight/Shipping/Delivery/Warehouse'],
			['name' => 'Manufacturing'],
			['name' => 'Medical/Pharmaceutical'],
			['name' => 'NGO/Charity/Social Services'],
			['name' => 'Others'],
			['name' => 'Packaging'],
			['name' => 'Performance/Musical/Artistic'],
			['name' => 'Property Management'],
			['name' => 'Real Estate'],
			['name' => 'Real Estate Leasing/Acquisition'],
			['name' => 'Recruiting Services'],
			['name' => 'Security/Fire/Electronic Access Controls'],
			['name' => 'Sports & Recreation'],
			['name' => 'Stationery/Books/Toys'],
			['name' => 'Telecommunication'],
			['name' => 'Tourism'],
			['name' => 'Trading'],
			['name' => 'Vehicle Repair & Maintenance'],
			['name' => 'Wholesale/Retail'],
		];
		
		foreach($industries as $value){
            Industry::create($value);
        }
    }
}
