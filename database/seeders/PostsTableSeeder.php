<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Menjadi Miliader', 'content'=>'lorem ipsum'],
            ['title'=>'Haruskah Menjadi Pengusaha?', 'content'=>'lorem ipsum'],
            ['title'=>'Membangun Visi Misi Bisnis', 'content'=>'lorem ipsum']
            ];

            // masukkan data ke database
            DB::table('posts')->insert($posts);
    }
}
