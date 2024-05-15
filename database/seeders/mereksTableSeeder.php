<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mereksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mereks = [
            ['nama_merek'=>'indofood'],
            ['nama_merek'=>'Nestle'],
            ['nama_merek'=>'Mama Suka'],
            ];

            // masukkan data ke database
            DB::table('mereks')->insert($mereks); 
    }
}
