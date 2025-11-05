<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/layanan', 'layanan')->name('layanan');
Route::view('/artikel', 'artikel')->name('artikel');
Route::view('/hubungi', 'hubungi')->name('hubungi');

use App\Http\Controllers\HubungiController;

Route::get('/hubungi-kami', [HubungiController::class, 'index'])->name('hubungi');
Route::post('/hubungi-kami', [HubungiController::class, 'kirim'])->name('hubungi.kirim');

Route::get('/artikel/tips-kuliah-luar-negeri', function () {
    return view('artikel.detail-tips'); // ganti dengan nama file view detail kamu
})->name('artikel.detail');
