<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    $nama = "Ikhsan";
    $jk = "Pria";
    $pendidikan = "Smk";
    $pekerjaan = "Programming";
    $alamat = "bandung";
    return view('data_diri', compact('nama','jk','pendidikan','pekerjaan','alamat'));
});

Route::get('/apaaja', function () {

    $nama2 = "Ikhsan";
    $jk2 = "Pria";
    $alamat2 = "Babakan Antasari";
    $tgl = "26 April 2007";
    $tmp = "Bandung";
    $hobi = "Look a Sky";
    $cita ="Sukses";

   return view('apaaja',compact('nama2','jk2','alamat2','tgl','tmp','hobi','cita'));
});

Route::get('/about2/{nama}/{jk}/{pendidikan}/{pekerjaan}/{alamat}', function (Request $request, $nama, $jk, $pendidikan, $pekerjaan, $alamat) {
    $nama2 = $nama;
    $jk2 = $jk;
    $pendidikan2 = $pendidikan;
    $pekerjaan2 = $pekerjaan;
    $alamat3 = $alamat;
    return view('data_diri2',compact('nama2','jk2','pendidikan2','pekerjaan2','alamat3'));
});