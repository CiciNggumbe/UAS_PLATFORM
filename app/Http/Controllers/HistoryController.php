<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrowing;

class HistoryController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::with('instrument')->get();
        return view('user.history', compact('borrowings'));
    }
}
