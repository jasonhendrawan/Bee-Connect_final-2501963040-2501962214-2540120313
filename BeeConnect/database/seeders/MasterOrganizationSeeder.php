<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\master_organization;

class MasterOrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        master_organization::create([
            'org_name'=>'HIMTI'
        ]);
        master_organization::create([
            'org_name'=>'HIMSISFO'
        ]);
        master_organization::create([
            'org_name'=>'UKM BASKET'
        ]);
        master_organization::create([
            'org_name'=>'UKM VOLI'
        ]);
    }
}
