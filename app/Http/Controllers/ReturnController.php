<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrowing;

class ReturnController extends Controller
{
    // Menampilkan daftar peminjaman yang masih pending pengembalian
    public function index()
    {
        // Ambil semua peminjaman yang belum dikembalikan
        $borrowings = Borrowing::where('return_status', '!=', 'returned')
            ->orWhereNull('return_status')
            ->with('instrument') // pastikan relasi ini aman dipanggil
            ->get();

        return view('user.return', compact('borrowings'));
    }

    // Memproses pengembalian
    public function process($id)
    {
        $borrowing = Borrowing::findOrFail($id);
        $borrowing->return_status = 'returned';
        $borrowing->returned_date = now(); // pastikan kamu punya kolom returned_date di DB
        $borrowing->save();

        return redirect()->route('return.index')->with('success', 'Instrument returned successfully.');
    }
}