<?php


use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;
use App\Models\Siswa;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Pembeli;
use App\Models\Barangdua;
use App\Models\Transaksi;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\BrandController;

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
    $post = Post::all();
    
    return view('tampil_post', compact('post'));
});
//menampilkan data dari database
Route::get ('/testmodelbarang', function(){
    // 
    $barang = Barang::all();
    
    return view('tampil_barang', compact('barang'));
});
//tugas
Route::get ('/testmodelsiswa', function(){
    //$data = Siswa::all();
    //$Siswa= siswa::where('jeniskelamin', 'like' ,'%perempuan%')->get();
    // $Siswa = new Siswa;
    // $Siswa->nama='Rahul';
    // $Siswa->jeniskelamin='laki-laki';
    // $Siswa->alamat='jl.anggur';
    // $Siswa->agama='kristen';
    // $Siswa->telepon=879678;
    // $Siswa->email='rahul@gmail.com';
    // $Siswa->save();
    // return $Siswa;
    $siswa = Siswa::all();
    return view('tampil_siswa', compact('siswa'));
    
});
//tampil pengguna
Route::get ('/testmodelpengguna', function(){
    // 
    $pengguna = Pengguna::all();
    
    return view('tampil_pengguna', compact('pengguna'));
});
//tampil telepon
Route::get ('/testmodeltelepon', function(){
    // 
    $telepon = Telepon::all();
    
    return view('tampil_telepon', compact('telepon'));
});
//tampil merek
Route::get ('/testmodelmerek', function(){
    // 
    $merek = Merek::all();
    
    return view('tampil_merek', compact('merek'));
});

//
Route::get ('/testmodelproduk', function(){
    // 
    $produk = Produk::all();
    
    return view('tampil_produk', compact('produk'));
});
//
Route::get ('/testmodelpembeli', function(){
    // 
    $pembeli = Pembeli::all();
    
    return view('tampil_pembeli', compact('pembeli'));
});
//
Route::get ('/testmodelbarangdua', function(){
    
    $barangdua = Barangdua::all();
    
    return view('tampil_barangdua', compact('barangdua'));
});
//
Route::get ('/testmodeltransaksi', function(){
    
    $transaksi = Transaksi::all();
    
    return view('tampil_transaksi', compact('transaksi'));
});
//controller

Route::get ('post/'    , [PostController::class, 'menampilkan']);
Route::get ('post/{id}'    , [PostController::class, 'show']);
//
Route::get ('/produk', [ProdukController::class, 'menampilkan']);
Route::get ('produk/{id}'    , [ProdukController::class, 'show']);   
//
Route::get ('/merek', [MerekController::class, 'menampilkan']);
Route::get ('merek/{id}'    , [MerekController::class, 'show']);   
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//CRUD brand
Route::resource('brand',BrandController::class);