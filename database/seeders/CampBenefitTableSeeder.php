<?php

namespace Database\Seeders;

use App\Models\Camp;
use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefit = [
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac Pro 2021 & Display'
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Certification'
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Videos'
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design  Kit'
            ], [
                'camp_id' => 1,
                'name' => 'Website Builder'
            ],
            [

                'camp_id' => 2,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Cartification'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Videos'
            ]
        ];

        foreach ($campBenefit as $key => $items) {
            CampBenefit::create($items);
        }
    }
}
