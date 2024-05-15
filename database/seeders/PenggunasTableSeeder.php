<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = [
            ['nama'=>'Sindy'],
            ['nama'=>'Aisha'],
            ['nama'=>'Ringgit'],
            ];

            // masukkan data ke database
            DB::table('penggunas')->insert($penggunas); 
    }
}
