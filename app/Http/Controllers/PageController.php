<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function visiMisi()
    {
        return view('tentang.visi-misi');
    }

    public function sejarah()
    {
        return view('tentang.sejarah');
    }

    public function strukturOrganisasi()
    {
        return view('tentang.struktur-organisasi');
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function berita()
    {
        return view('berita.index');
    }

    public function beritaDetail()
    {
        return view('berita.show');
    }

    public function pengumuman()
    {
        return view('pengumuman.index');
    }

    public function dokumen()
    {
        return view('dokumen.index');
    }

    public function ppid()
    {
        return view('ppid');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function okegas()
    {
        return view('okegas');
    }
}
