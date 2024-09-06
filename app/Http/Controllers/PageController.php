<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    } 
    
    public function about() {
        return 'Nama: [Sheva Ananda Arifiansyah], NIM: [2241760114]';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID: ' . $id;
    }

    public function createArticle(Request $request) {
        return 'Membuat Artikel baru dengan judul: ' . $request->input('title');
    }

    public function updateArticle(Request $request, $id) {
        return 'Mengupdate Artikel dengan ID: ' . $id . ' dengan judul: ' . $request->input('title');
    }

    public function deleteArticle($id) {
        return 'Menghapus Artikel dengan ID: ' . $id;
    }

}
