<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// buat route basic introduce yourself
Route::get('/biodata', function () {
    return '<h1>Biodata</h1>'
    . 'Nama : Sindy launa <br>'
    . 'Tempat Lahir : Bandung <br>'
    . 'Tanggal lahir : 24 November 2006 <br>'
    . 'Sekolah : SMK ASSALAAM BANDUNG.';
});

// buat route basic to view
Route::get('animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetables_page',['buah' => $fruit]);
});

// route parameter: parameter ditandai dengan {}
Route::get('product/{name}', function ($name) {
    return "produk : $name";
});

// route parameter: parameter ditandai dengan {}
Route::get('identitas/{nama}/{bb}/{tb}', function ($nama, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);
    if ($bmi > 30) {
        $ket = "Obesitas";
    } elseif ($bmi > 25) {
        $ket = "kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "Ideal";
    } elseif ($bmi < 18.5) {
        $ket = "kekurangan berat badan";
    }
    return "Nama : $nama <br>".
            "Berat Badan = $bb <br>".
            "Tinggi Badan = $tb<br>".
            "Nilai BMI =  $bmi <br>".
            "Keterangan = $ket";
});

// Route Optional Parameter -> ditandai dengan ?
Route::get ('myname/{nama?}', function($a = "Sindy"){
    return "my name is $a";
});

//menampilkan data dari database
Route::get ('/testmodel', function(){
    $data = Post::all();
    return $data;
});
//menampilkan data dari database
Route::get ('/testmodelbarang', function(){
    $data = Barang::all();
    return $data;
});