<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\SuplierController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// route::get('hal2',function(){
//     return "<h1> Selamat Datang Dihalaman ke 2</h1>";

// });

// route::get('biodata',function(){
//     $nama = "cindy nurul a";
//     $jk = "perempuan";
//     $ttl = "Bandung, 05 januari 2004";
//     $alamat = "kp.bj.kukun";
//     $agama = "islam";
//     $hobi = "membaca";

//     return "Nama : $nama<br> 
//     jenis kelamin : $jk <br>
//     tanggal lahir : $ttl <br>
//     alamat : $alamat <br>
//     agama : $agama <br>
//     hobi : $hobi <br>
//     ";
  

// });

// Route::get('biodata2', function () {

//     $nama = "cindy nurul a";
//     $jk = "perempuan";
//     $tempat = "Bandung";
//     $tanggal= "05 januari 2004";
//     $alamat = "kp.bj.kukun";
//     $agama = "islam";
//     $hobi = "berenang";
//     return view('biodata',compact('nama','jk','tempat','tanggal','alamat','agama','hobi'));
    

// });


    //  Route::get('blog',function(){
    //    $data = [
    //        ['id' => 1, 'title' => 'Lorem Ipsum 1','content' => 'Contoh konten pertama'],
    //        ['id' => 2, 'title' => 'Lorem Ipsum 2','content' => 'Contoh konten kedua'],
    //        ['id' => 3, 'title' => 'Lorem Ipsum 3','content' => 'Contoh konten ketiga'],
    //    ];
    //    //dd($data);
    //    return view('blog',compact('data'));
    // });

    // Route::get('biodata2',function(){
    //     $data = [
    //         ['nis' => '12345', 'nama' => 'cindy','jk' => 'perempuan','kelas' => 'XII RPL 3','alamat' => 'Rancamanyar'],
    //         ['nis' => '67890', 'nama' => 'dinda','jk' => 'perempuan','kelas' => 'XII RPL 3','alamat' => 'bmi'],
    //         ['nis' => '23456', 'nama' => 'selvi','jk' => 'perempuan','kelas' => 'XII RPL 3','alamat' => 'cupu'],
    //         ['nis' => '78901', 'nama' => 'anggi','jk' => 'perempuan','kelas' => 'XII RPL 3','alamat' => 'bojong'],
    //         ['nis' => '34567', 'nama' => 'rizky say','jk' => 'laki-laki','kelas' => 'XII RPL 3','alamat' => 'bmi'],
    //         ['nis' => '89012', 'nama' => 'bima','jk' => 'laki-laki','kelas' => 'XII RPL 3','alamat' => 'Rancamanyar'],
    //         ['nis' => '45678', 'nama' => 'Roby','jk' => 'laki-laki','kelas' => 'XII RPL 3','alamat' => 'lewidulang'],
    //         ['nis' => '90123', 'nama' => 'sifa','jk' => 'perempuan','kelas' => 'XII RPL 3','alamat' => 'lewidulang'],
    //         ['nis' => '01234', 'nama' => 'ike','jk' => 'perempuan','kelas' => 'XII RPL 3','alamat' => 'nusa'],
    //         ['nis' => '56789', 'nama' => 'alya','jk' => 'perempuan','kelas' => 'XII RPL 3','alamat' => 'cibaduyut'],
           
    //     ];
    //     //dd($data);
    //     return view('biodata2 ',compact('data'));
    //  });

    // Route::get('siswa', function () {
    //     $siswas = [
    //         ['id'        => 1,
    //         'nama'       => 'cindy',
    //         'username'   => 'cindy',
    //         'email'      => 'cindy@gmail.com',
    //         'alamat'     => 'Bandung',
    //         'mapel' => [
    //             'mapel1' => 'Bahasa Indonesia',
    //             'mapel2' => 'Bahasa Inggris',
    //             'mapel3' => 'Bahaasa Jepang',
    //             'mapel4' => 'Bahasa Belanda',
    //         ]
    //         ],
    //     ];
    //     return view('siswa',compact('siswas'));
    // });


// route::get('/input/{nama}/{jk}/{tempat}/{tanggal}/{alamat}/{agama}/{hobi}', function($nama,$jk,$tempat,$tanggal,$alamat,$agama,$hobi){
//     echo "<br>nama saya : ".$nama;
//     echo "<br>jenis kelamin : ".$jk;
//     echo "<br>Tempat lahir : ".$tempat;
//     echo "<br>tanggal lahir : ".$tanggal;
//     echo "<br>alamat : ".$alamat;
//     echo "<br>agama : ".$agama;
//     echo "<br>hobi : ".$hobi;
// });

// route::get('/input/{nama}', function($nama){
//     echo "nama saya : ".$nama;
// });

//parameter optional    
// route::get('/input/{nama?}', function($nama="Cindy"){
//     echo "nama saya : ".$nama;
// });

// route::get('/input/{nama?}/{kelas?}', function($nama=NULL,$kelas=null){
//     echo "nama saya : ".$nama;
//     echo "<br>";
//     echo "kelas :".$kelas;
// });

// Route::get('/input/{nama?}/{indo?}/{ing?}/{mtk?}/{pro?}', function ($nama, $indo, $ing, $mtk, $pro) {
//     echo "Nama  : " . $nama;
//     echo "<br>Nilai Bahasa Indonesia : " . $indo;
//     echo "<br>Nilai Bahasa Inggris   : " . $ing;
//     echo "<br>Nilai Matematika       : " . $mtk;
//     echo "<br>Nilai Produktif        : " . $pro;
//     $rata = ($indo + $ing + $mtk + $pro) / 4;
//     echo "<br>Rata-Rata : " . $rata;
//     echo "<br>Grade : ";
//     if ($rata >= 90) {
//         echo "A";
//     } elseif ($rata >= 80) {
//         echo "B";
//     } elseif ($rata >= 70) {
//         echo "C";
//     } else {
//         echo "D";
//     }

// });


// Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

// if ($makanan && $minuman && $cemilan != null) {
//             return " Makanan = $makanan <br>
//                      Minuman = $minuman <br>
//                      Cemilan = $cemilan";
//         } else if ($makanan && $minuman != null) {
//             return "Makanan = $makanan <br>
//                     Minuman = $minuman";
//         } else if ($makanan || $minuman != null) {
//             return $makanan != null ? "makanan : $makanan" : " minuman : $minuman";
//         } else {
//             return "Anda Tidak Memesan Silakan Pulang !";
        
//         }
//     });

// Route::get('/testmodel',function(){
//     $query = App\Models\Post::all();
//     return $query;
// });

// Route::get('test',function(){
//     $query = App\Models\Post::all();
//     return view('test', compact('query'));
// });

// Route::get('barangs',function(){
//     $query = App\Models\barangs::all();
//     return view('barangs', compact('query'));
// });

Route::get('/barang', [BarangController::class,'tampilkan']);
Route::get('/pembelian', [pembelianController::class,'data']);
Route::get('/pembeli', [pembeliController::class,'pembeli']);
Route::get('/pesanan', [pesananController::class,'pesanan']);
Route::get('/suplier', [suplierController::class,'suplier']);



// Route::get('pesanans',function(){
//     $query = App\Models\pesanans::all();
//     return view('pesanans', compact('query'));
// });
// Route::get('pembelians',function(){
//     $query = App\Models\pembelians::all();
//     return view('pembelians', compact('query'));
// });
// Route::get('pembelis',function(){
//     $query = App\Models\pembelis::all();
//     return view('pembelis', compact('query'));
// });
// Route::get('supliers',function(){
//     $query = App\Models\supliers::all();
//     return view('supliers', compact('query'));
// });
 