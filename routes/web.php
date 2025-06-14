<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Peminjaman;
use App\Http\Controllers\PeminjamanController;

// ================= WELCOME ================= //
Route::get('/', function () {
    return view('welcome');
});

// ================= LOGIN PAGE ================= //
Route::get('/login', function () {
    return view('login');
})->name('login');

// ================= HANDLE LOGIN ================= //
Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username === 'admin' && $password === 'admin_p4ss') {
        Session::put('username', $username);
        Session::put('role', 'admin');
        return redirect()->route('dashboard.admin');
    }

    if ($username === 'user' && $password === 'user_p4ss') {
        Session::put('username', $username);
        Session::put('role', 'user');
        return redirect()->route('dashboard.user');
    }

    return redirect()->route('login')->with('error', 'Invalid credentials.');
})->name('login.process');

// ================= LOGOUT ================= //
Route::get('/logout', function () {
    Session::flush();
    return redirect('/login');
})->name('logout');

// ================= ADMIN ROUTES ================= //
Route::middleware('web')->group(function () {

    Route::get('/dashboard-admin', function () {
        if (Session::get('role') !== 'admin') {
            return redirect()->route('login');
        }
        return view('admin.dashboard_admin');
    })->name('dashboard.admin');

    Route::get('/data-pengguna', function () {
        if (Session::get('role') !== 'admin') {
            return redirect()->route('login');
        }
        return view('admin.data_pengguna');
    })->name('pengguna.index');

    Route::get('/data-alatmusik', function () {
        if (Session::get('role') !== 'admin') {
            return redirect()->route('login');
        }
        return view('admin.data_alatmusik');
    })->name('alatmusik.index');

    Route::get('/transaksi', function () {
        if (Session::get('role') !== 'admin') {
            return redirect()->route('login');
        }
        return view('admin.transaksi');
    })->name('transaksi.index');

    Route::get('/laporan', function () {
        if (Session::get('role') !== 'admin') {
            return redirect()->route('login');
        }
        return view('admin.laporan');
    })->name('laporan.index');

    Route::get('/riwayat-pengembalian', function () {
        if (Session::get('role') !== 'admin') {
            return redirect()->route('login');
        }
        return view('admin.riwayat_pengembalian');
    })->name('pengembalian.index');
});

// ================= USER ROUTES ================= //
Route::middleware('web')->group(function () {

    Route::get('/dashboard-user', function () {
        if (Session::get('role') !== 'user') {
            return redirect()->route('login');
        }
        return view('user.dashboard_user');
    })->name('dashboard.user');

    Route::get('/riwayat-peminjaman', function () {
        if (Session::get('role') !== 'user') {
            return redirect()->route('login');
        }

        $username = Session::get('username'); // ambil nama user login

        // Ambil data dari tabel peminjamans untuk user tersebut
        $riwayat = Peminjaman::where('nama_pemesan', $username)->get();

        // Kirim data ke tampilan
        return view('user.riwayat_peminjaman', compact('riwayat'));
    })->name('riwayat.peminjaman');
});
