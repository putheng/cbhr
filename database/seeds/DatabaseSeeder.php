<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(AgeTableSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CompanyTypeTableSeeder::class);
        $this->call(EducationTableSeeder::class);
        $this->call(EmployeeTypeTableSeeder::class);
        $this->call(ExperienceTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(IndustryTableSeeder::class);
        $this->call(LevelTableSeeder::class);
        $this->call(PaymentProcessorTableSeeder::class);
        $this->call(SalaryTableSeeder::class);
        $this->call(TermTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        
    }
}
