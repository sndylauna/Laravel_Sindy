<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli'=>'Ringgit','jenis_kelamin'=>'Perempuan'],
            ['nama_pembeli'=>'Rafa','jenis_kelamin'=>'Laki-laki'],
            ['nama_pembeli'=>'Syahwa','jenis_kelamin'=>'Perempuan'],
            ];

            // masukkan data ke database
            DB::table('Pembelis')->insert($pembelis); 
    }
}
