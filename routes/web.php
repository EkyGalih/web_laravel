<?php

use App\Mahasiswa;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/contoh', function(){
//    echo 'Contoh Routing ';
// });

//Route::resource('mahasiswa','MahasiswaController');

// Route::get('/mhs', function(){
//     return Mahasiswa::all();
// });

// Route::get('mahasiswa', 'MahasiswaController@index')
//     ->name('mahasiswa.index');

// Route::get('', 'MahasiswaController@create');
Route::resource('mahasiswa', 'MahasiswaController');