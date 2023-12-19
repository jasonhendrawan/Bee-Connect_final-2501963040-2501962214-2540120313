<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\master_major;

class MasterMajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        master_major::create([
            'major_name'=>'Computer Science'
        ]);
        master_major::create([
            'major_name'=>'System Information'
        ]);
        master_major::create([
            'major_name'=>'International Business Management'
        ]);
        master_major::create([
            'major_name'=>'Management'
        ]);
        master_major::create([
            'major_name'=>'Hotel & Management'
        ]);
        
    }
}
