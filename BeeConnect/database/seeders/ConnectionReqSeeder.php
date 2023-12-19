<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\connection_req;

class ConnectionReqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        connection_req::create([
            'status'=>'Accepted',
            'user_id'=>'1',
            'connector_id'=>'2',
        ]);
        connection_req::create([
            'status'=>'Accepted',
            'user_id'=>'2',
            'connector_id'=>'3',
        ]);
        connection_req::create([
            'status'=>'Rejected',
            'user_id'=>'3',
            'connector_id'=>'4',
        ]);
        connection_req::create([
            'status'=>'Rejected',
            'user_id'=>'4',
            'connector_id'=>'5',
        ]);
        connection_req::create([
            'status'=>'Pending',
            'user_id'=>'5',
            'connector_id'=>'6',
        ]);
        connection_req::create([
            'status'=>'Pending',
            'user_id'=>'5',
            'connector_id'=>'6',
        ]);
    }
}
