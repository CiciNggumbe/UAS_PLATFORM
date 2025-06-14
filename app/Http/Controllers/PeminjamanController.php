<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function riwayat()
    {
        $data = Peminjaman::all(); // ambil semua data dari tabel peminjamans
       return view('riwayat-peminjaman', ['riwayat' => $data]);
    }
}
