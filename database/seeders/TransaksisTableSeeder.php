<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['barangdua_id'=>1,'pembeli_id'=>1,'jumlah'=>10,'tanggal'=>'2024-05-04'],
            ['barangdua_id'=>1,'pembeli_id'=>1,'jumlah'=>21,'tanggal'=>'2024-05-04'],
            ['barangdua_id'=>2,'pembeli_id'=>2,'jumlah'=>15,'tanggal'=>'2024-05-04'],
            ['barangdua_id'=>2,'pembeli_id'=>2,'jumlah'=>12,'tanggal'=>'2024-05-04'],
            ['barangdua_id'=>3,'pembeli_id'=>3,'jumlah'=>11,'tanggal'=>'2024-05-04'],
            ['barangdua_id'=>3,'pembeli_id'=>3,'jumlah'=>15,'tanggal'=>'2024-05-04'],

            ];

            // masukkan data ke database
            DB::table('Transaksis')->insert($transaksis);  
    }
}
