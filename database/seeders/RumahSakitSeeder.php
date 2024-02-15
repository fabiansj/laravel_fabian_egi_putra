<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rumahsakits')->insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'nama_rumahsakit' => 'hasansadikin',
                'alamat' => 'jln.pasirkaliki',
                'email' => 'hasansadikin@gmail.com',
                'phone' => '082872353503',
            ],

            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'nama_rumahsakit' => 'dustira',
                'alamat' => 'jln.cimahi',
                'email' => 'dustira@gmail.com',
                'phone' => '083765213227',
            ],

            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'nama_rumahsakit' => 'santosa',
                'alamat' => 'Jln.Kebon Jati',
                'email' => 'santosa@gmail.com',
                'phone' => '082774238491',
            ],

        ]);
    }
}
