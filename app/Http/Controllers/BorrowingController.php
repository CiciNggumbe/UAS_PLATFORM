<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrowing;

class BorrowingController extends Controller
{
    public function create()
    {
        return view('user.borrowing');
    }

    public function store(Request $request)
    {
        $request->validate([
            'duration' => 'required|in:7,14,28,30',
            'payment_method' => 'required|in:credit-card,bank-transfer,e-wallet',
        ]);

        Borrowing::create([
            'duration' => $request->duration,
            'payment_method' => $request->payment_method,
        ]);

        return redirect('/history')->with('success', 'Peminjaman berhasil diajukan!');
    }

    public function index()
    {
        $borrowings = Borrowing::latest()->get();
        return view('history', compact('borrowings'));
    }
};