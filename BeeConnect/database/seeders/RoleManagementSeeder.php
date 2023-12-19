<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\role_management;

class RoleManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        role_management::create([
            'role_name'=>'Admin'
        ]);
        role_management::create([
            'role_name'=>'User'
        ]);
    }
}
