<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index');
    
    Route::group(['prefix' => 'tentang'], function () {
        Route::get('/visi-misi', 'visiMisi');
        Route::get('/sejarah', 'sejarah');
        Route::get('/struktur-organisasi', 'strukturOrganisasi');
    });

    Route::get('/layanan', 'layanan');
    
    Route::group(['prefix' => 'berita'], function () {
        Route::get('/', 'berita');
        Route::get('/{slug}', 'beritaDetail')->name('berita.detail');
    });

    Route::get('/pengumuman', 'pengumuman');
    Route::get('/dokumen', 'dokumen');
    Route::get('/ppid', 'ppid');
    Route::get('/kontak', 'kontak');
    Route::get('/okegas', 'okegas');
});
