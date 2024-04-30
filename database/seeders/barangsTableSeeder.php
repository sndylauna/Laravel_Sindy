<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama'=>'Baju', 'jumlah'=>100],
            ['nama'=>'Celana', 'jumlah'=>200],
            ['nama'=>'Kemeja', 'jumlah'=>300]
            ];

            // masukkan data ke database
            DB::table('barangs')->insert($barangs);
    }
}
