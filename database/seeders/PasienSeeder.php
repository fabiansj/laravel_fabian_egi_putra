<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pasiens')->insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'nama_pasien' => 'sina aulia',
                'alamat' => 'jln.soekarno hatta no 98',
                'phone' => '08928632542',
                'rumah_sakit_id' => '1',
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'nama_pasien' => 'santa auri',
                'alamat' => 'jln.buah batu',
                'phone' => '08857232542',
                'rumah_sakit_id' => '2',
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'nama_pasien' => 'ria putri',
                'alamat' => 'jln.soekarno hatta no 42',
                'phone' => '08772637542',
                'rumah_sakit_id' => '1',
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'nama_pasien' => 'raka putra',
                'alamat' => 'jln.pasirkaliki no 6',
                'phone' => '087723882342',
                'rumah_sakit_id' => '3',
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'nama_pasien' => 'muhammad indra',
                'alamat' => 'jln.pasar baru no 324',
                'phone' => '0877238234556',
                'rumah_sakit_id' => '3',
            ],
        ]);
    }
}
