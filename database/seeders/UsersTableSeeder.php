<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'John Doe',
                'designation_id' => random_int(1, 4), 
                'department_id' => random_int(1, 4), 
                'phone_number' => '123456789',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Tommy',
                'designation_id' => random_int(1, 4), 
                'department_id' => random_int(1, 4), 
                'phone_number' => '123456789',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Tommy george',
                'designation_id' => random_int(1, 4), 
                'department_id' => random_int(1, 4), 
                'phone_number' => '123456789',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'jhon',
                'designation_id' => random_int(1, 4), 
                'department_id' => random_int(1, 4), 
                'phone_number' => '123456789',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        } 
    }
}
