<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan semua alat musik ke halaman user/products.blade.php
    public function index()
    {
        $instruments = Instrument::all();
        return view('user.products', compact('instruments'));
    }

    // (Opsional) Menampilkan detail alat musik
    public function show($id)
    {
        $instrument = Instrument::findOrFail($id);
        return view('user.productdetail', compact('instrument'));
    }
}