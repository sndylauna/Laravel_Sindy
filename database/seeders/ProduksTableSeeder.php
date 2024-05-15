<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk'=>'Mie','jumlah'=>100,'tanggal_produk'=>'2024-05-02','merek_id'=>1],
            ['nama_produk'=>'Saos','jumlah'=>100,'tanggal_produk'=>'2024-05-02','merek_id'=>1],
            ['nama_produk'=>'Bubur Bayi','jumlah'=>100,'tanggal_produk'=>'2024-05-02','merek_id'=>2],
            ['nama_produk'=>'Air Minum','jumlah'=>100,'tanggal_produk'=>'2024-05-02','merek_id'=>2],
            ['nama_produk'=>'Santan','jumlah'=>100,'tanggal_produk'=>'2024-05-02','merek_id'=>3],
            ['nama_produk'=>'Rumput LAut','jumlah'=>100,'tanggal_produk'=>'2024-05-02','merek_id'=>3],

            ];

            // masukkan data ke database
            DB::table('Produks')->insert($produks); 
    }
}
