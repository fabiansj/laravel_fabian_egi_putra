<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penggunas')->insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'username' => 'admin',
                'password' => 'admin',
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'username' => 'admin1',
                'password' => 'admin2',
            ],
        ]);

    }
}
