<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MasterUserSeeder::class);
        $this->call(MasterMajorSeeder::class);
        $this->call(MasterRegionSeeder::class);
        $this->call(MasterOrganizationSeeder::class);
        $this->call(ConnectionReqSeeder::class);
        $this->call(RoleManagementSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
