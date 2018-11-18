<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Accounting/Finance',
                'children' => [
                    ['name' => 'Accounting/Finance'],
                    ['name' => 'Audit &amp; Taxation'],
                    ['name' => 'Banking/Financial'],
                    ['name' => 'Corporate Finance/Investment'],
                    ['name' => 'General/Cost Accounting'],
                ]
            ],
            [
                'name' => 'Admin/Human Resources',
                'children' => [
                    ['name' => 'Admin/Human Resources'],
                    ['name' => 'Clerical/Administrative'],
                    ['name' => 'Human Resources'],
                    ['name' => 'Secretarial'],
                    ['name' => 'Top Management'],
                    ['name' => 'Translation/Interpretation'],
                ]
            ],
            [
                'name' => 'Arts/Media/Communications',
                'children' => [
                    ['name' => 'Arts/Media/Communications'],
                    ['name' => 'Advertising'],
                    ['name' => 'Arts/Creative Design'],
                    ['name' => 'Entertainment'],
                    ['name' => 'Public Relations'],
                    ['name' => 'Graphic Designer'],
                ]
            ],
            [
                'name' => 'Building/Construction',
                'children' => [
                    ['name' => 'Building/Construction'],
                    ['name' => 'Architect/Interior Design'],
                    ['name' => 'Civil Engineering/Construction'],
                    ['name' => 'Property/Real Estate'],
                    ['name' => 'Quantity Surveying'],
                ]
            ],
            [
                'name' => 'Information Technology',
                'children' => [
                    ['name' => 'Computer/Information Technology'],
                    ['name' => 'Hardware'],
                    ['name' => 'Network/Sys/DB Admin'],
                    ['name' => 'Graphic Design'],
                    ['name' => 'IT Network'],
                    ['name' => 'IT Support'],
                    ['name' => 'Web Developer'],
                    ['name' => 'Web Design'],
                    ['name' => 'Technical'],
                    ['name' => 'Software Engineer'],
                    ['name' => 'System Administrator'],
                    ['name' => 'Network Investigator'],
                    ['name' => 'Network Designer'],
                    ['name' => 'Database Developer'],
                    ['name' => 'Video Editor'],
                    ['name' => 'Mobile Developer'],
                    ['name' => 'Programmer'],
                    ['name' => 'Graphic Designer'],
                ]
            ],
            [
                'name' => 'Education/Training',
                'children' => [
                    ['name' => 'Education/Training'],
                    ['name' => 'Education'],
                    ['name' => 'Training &amp; Dev.'],
                ]
            ],
            [
                'name' => 'Engineering',
                'children' => [
                    ['name' => 'Engineering'],
                    ['name' => 'Chemical Engineering'],
                    ['name' => 'Electrical Engineering'],
                    ['name' => 'Electronics Engineering'],
                    ['name' => 'Environmental Engineering'],
                    ['name' => 'Industrial Engineering'],
                    ['name' => 'Mechanical/Automotive Engineering'],
                    ['name' => 'Oil/Gas Engineering'],
                    ['name' => 'Other Engineering'],
                ]
            ],
            [
                'name' => 'Healthcare',
                'children' => [
                    ['name' => 'Healthcare'],
                    ['name' => 'Doctor/Diagnosis'],
                    ['name' => 'Pharmacy'],
                    ['name' => 'Nurse/Medical Support'],
                    ['name' => 'Medical/Health/Nursing'],
                ]
            ],
            [
                'name' => 'Hotel/Restaurant/Tourism',
                'children' => [
                    ['name' => 'Hotel/Restaurant'],
                    ['name' => 'Food/Beverage/Restaurant'],
                    ['name' => 'Cashier/Receptionist'],
                    ['name' => 'Travel Agent/Ticket Sales'],
                    ['name' => 'Cook/Cleaner/Maid'],
                    ['name' => 'Catering/Restaurant'],
                ]
            ],
            [
                'name' => 'Manufacturing',
                'children' => [
                    ['name' => 'Manufacturing'],
                    ['name' => 'Maintenance'],
                    ['name' => 'Process/Design/Control'],
                    ['name' => 'Purchasing/Material Mgmt'],
                    ['name' => 'Quality Assurance'],
                ]
            ],
            [
                'name' => 'Sales/Marketing',
                'children' => [
                    ['name' => 'Sales/Marketing'],
                    ['name' => 'Sales - Corporate'],
                    ['name' => 'Marketing/Business Dev'],
                    ['name' => 'Merchandising'],
                    ['name' => 'Retail Sales'],
                    ['name' => 'Sales - Eng/Tech/IT'],
                    ['name' => 'Sales - Financial Services'],
                    ['name' => 'Telesales/Telemarketing'],
                ]
            ],
            [
                'name' => 'Sciences',
                'children' => [
                    ['name' => 'All Sciences'],
                    ['name' => 'Actuarial/Statistics'],
                    ['name' => 'Agriculture'],
                    ['name' => 'Aviation'],
                    ['name' => 'Biotechnology'],
                    ['name' => 'Chemistry'],
                    ['name' => 'Food Tech/Nutritionist'],
                    ['name' => 'Geology/Geophysics'],
                    ['name' => 'Science/Technology'],
                ]
            ],
            [
                'name' => 'Services',
                'children' => [
                    ['name' => 'All Services'],
                    ['name' => 'Security/Armed Forces'],
                    ['name' => 'Customer Service'],
                    ['name' => 'Logistics/Supply Chain'],
                    ['name' => 'Law/Legal Services'],
                    ['name' => 'Personal Care'],
                    ['name' => 'Social Services'],
                    ['name' => 'Tech/Helpdesk Support'],
                ]
            ],
            [
                'name' => 'Others',
                'children' => [
                    ['name' => 'All Others'],
                    ['name' => 'General Work'],
                    ['name' => 'Journalist/Editors'],
                    ['name' => 'Publishing'],
                ]
            ],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
