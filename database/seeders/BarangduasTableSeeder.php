<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangduasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangduas = [
            ['nama_barang'=>'Buku','harga'=>5000,'stok'=>50],
            ['nama_barang'=>'Pensil','harga'=>3000,'stok'=>50],
            ['nama_barang'=>'Penggaris','harga'=>5000,'stok'=>50],
            ];

            // masukkan data ke database
            DB::table('Barangduas')->insert($barangduas); 
    }
}
