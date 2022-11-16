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

// Route::get('/', function() {
//     return view('home',
//     ['name'=> 'Agung',
//     'alamat'=> 'Depok',
//     'kelas'=> 'XI PPLG',
//     'mapel' => ['ipa','ips','mtk']
//     ]);
// });

Route::get('/', function() {
    return view('calendar');
})->name('calendar');
Route::get('/home', function() {
    return view('calendar');
})->name('calendar');
Route::get('/home/about', function() {
    return view('gallery');
})->name('gallery');
Route::get('/home/about/help', function() {
    return view('kanban');
})->name('kanban');



    

// Route::get('/', function () {
//     return view('homss',[
//         'name' => 'varel baik hati', 
//         'role' => 'spy',
//         'mobil' => ['mercy','avanza','gtr','kijang','brio']
//     ]);
// });