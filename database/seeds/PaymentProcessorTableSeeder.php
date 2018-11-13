<?php

use Illuminate\Database\Seeder;

class PaymentProcessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = [
            [
                'name' => 'Wing',
                'minimum' => '10',
                'recipient' => '093259984',
                'code_length' => '8',
            ],
            [
                'name' => 'Truemoney',
                'minimum' => '10',
                'recipient' => '093259984',
                'code_length' => '8',
            ],  
        ];
        
        \App\Models\Processor::insert($type);
    }
}
