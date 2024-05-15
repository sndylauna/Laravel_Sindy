<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Siswas = [
            ['nama'=>'Sindy', 'jeniskelamin'=>'perempuan', 'alamat'=>'jl.mangga','agama'=>'islam',
             'telepon'=>876578,'email'=>'sndy@gmail.com'],
             ['nama'=>'aisha', 'jeniskelamin'=>'perempuan', 'alamat'=>'jl.mangga','agama'=>'islam',
             'telepon'=>876788,'email'=>'aisha@gmail.com'],
             ['nama'=>'nazwa', 'jeniskelamin'=>'perempuan', 'alamat'=>'jl.manggis','agama'=>'islam',
             'telepon'=>875782,'email'=>'nazwa@gmail.com'],
             ['nama'=>'felisa', 'jeniskelamin'=>'perempuan', 'alamat'=>'jl.manggis','agama'=>'islam',
             'telepon'=>876545,'email'=>'felisa@gmail.com'],
             ['nama'=>'naswha', 'jeniskelamin'=>'perempuan', 'alamat'=>'jl.mangga','agama'=>'islam',
             'telepon'=>876598,'email'=>'naswha@gmail.com'],
             ['nama'=>'Wandi', 'jeniskelamin'=>'laki-laki', 'alamat'=>'jl.salak','agama'=>'islam',
             'telepon'=>87678,'email'=>'wandi@gmail.com'],
             ['nama'=>'Surya', 'jeniskelamin'=>'laki-laki', 'alamat'=>'jl.mangga','agama'=>'islam',
             'telepon'=>876565,'email'=>'surya@gmail.com'],
             ['nama'=>'Sidik', 'jeniskelamin'=>'laki-laki', 'alamat'=>'jl.salak','agama'=>'islam',
             'telepon'=>875478,'email'=>'sydik@gmail.com'],
             ['nama'=>'Sita', 'jeniskelamin'=>'perempuan', 'alamat'=>'jl.mangga','agama'=>'islam',
             'telepon'=>843278,'email'=>'sita@gmail.com'],
             ['nama'=>'Selly', 'jeniskelamin'=>'perempuan', 'alamat'=>'jl.mangga','agama'=>'islam',
             'telepon'=>886478,'email'=>'selly@gmail.com']

           
            ];

            // masukkan data ke database
            DB::table('Siswas')->insert($Siswas);
    }
}
