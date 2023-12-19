<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\master_region;

class MasterRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        master_region::create([
            'region_name'=>'Alam Sutera'
        ]);
        master_region::create([
            'region_name'=>'Kemanggisan'
        ]);
        master_region::create([
            'region_name'=>'Senayan'
        ]);
        master_region::create([
            'region_name'=>'Bekasi'
        ]);
        master_region::create([
            'region_name'=>'Malang'
        ]);
        master_region::create([
            'region_name'=>'Semarang'
        ]);
        master_region::create([
            'region_name'=>'Bandung'
        ]);
    }
}
