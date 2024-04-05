<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designations = [
            ['name' => 'Manager'],
            ['name' => 'Assistant Manager'],
            ['name' => 'Executive'],
            ['name' => 'Coordinator'],
        ];

        foreach ($designations as $designation) {
            DB::table('designations')->insert([
                'name' => $designation['name'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
