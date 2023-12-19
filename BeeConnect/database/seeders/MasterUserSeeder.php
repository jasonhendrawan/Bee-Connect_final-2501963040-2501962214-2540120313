<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class MasterUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'role_id'=>2,
            'major_id'=>1,
            'region_id'=>1,
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'email'=>fake()->email(),
            'student_id'=>'2501962214',
            'password'=>bcrypt('Verrel123'),
            'gender'=>'Male',
            'image'=> fake()->image('public/assets/profile', 400, 300, null, false)
        ]);
        User::create([
            'role_id'=>2,
            'major_id'=>2,
            'region_id'=>2,
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'email'=>fake()->email(),
            'student_id'=>'2501962215',
            'password'=>bcrypt('Verrel123'),
            'gender'=>'Male',
            'image'=> fake()->image('public/assets/profile', 400, 300, null, false)
        ]);
        User::create([
            'role_id'=>2,
            'major_id'=>3,
            'region_id'=>3,
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'email'=>fake()->email(),
            'student_id'=>'2501962216',
            'password'=>bcrypt('Verrel123'),
            'gender'=>'Male',
            'image'=> fake()->image('public/assets/profile', 400, 300, null, false)
        ]);
        User::create([
            'role_id'=>2,
            'major_id'=>4,
            'region_id'=>4,
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'email'=>fake()->email(),
            'student_id'=>'2501962217',
            'password'=>bcrypt('Verrel123'),
            'gender'=>'Male',
            'image'=> fake()->image('public/assets/profile', 400, 300, null, false)
        ]);
        User::create([
            'role_id'=>2,
            'major_id'=>5,
            'region_id'=>5,
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'email'=>fake()->email(),
            'student_id'=>'2501962218',
            'password'=>bcrypt('Verrel123'),
            'gender'=>'Male',
            'image'=> fake()->image('public/assets/profile', 400, 300, null, false)
        ]);
        User::create([
            'role_id'=>2,
            'major_id'=>6,
            'region_id'=>1,
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'email'=>fake()->email(),
            'student_id'=>'2501962219',
            'password'=>bcrypt('Verrel123'),
            'gender'=>'Male',
            'image'=> fake()->image('public/assets/profile', 400, 300, null, false)
        ]);
        User::create([
            'role_id'=>1,
            'major_id'=>2,
            'region_id'=>2,
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'email'=>'adminBeecon@binus.ac.id',
            'student_id'=>'25016221',
            'password'=>bcrypt('Verrel123'),
            'gender'=>'Male',
            'image'=> fake()->image('public/assets/profile', 400, 300, null, false)
        ]);



    }
}
