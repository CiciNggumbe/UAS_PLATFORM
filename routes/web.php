<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Borrowing;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ReturnController;

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
    $credentials = $request->validate([
        'username' => ['required', 'string'],
        'password' => ['required'],
    ]);

    // Admin login hardcoded (opsional)
    if ($credentials['username'] === 'admin' && $credentials['password'] === 'admin_p4ss') {
        Session::put('username', 'Admin');
        Session::put('role', 'admin');
        return redirect()->route('dashboard.admin');
    }

    // Cari user berdasarkan username (bukan email lagi)
    $user = User::where('name', $credentials['username'])->first();

    if ($user && Hash::check($credentials['password'], $user->password)) {
        Session::put('username', $user->name);
        Session::put('role', 'user');
        return redirect()->route('user.dashboard');
    }

    return redirect()->route('login')->with('error', 'Username atau password salah.');
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

    Route::get('/data-pengguna', [UserController::class, 'index'])->name('pengguna.index');

    Route::get('/data-alatmusik', [InstrumentController::class, 'index'])->name('alatmusik.index');
    Route::post('/data-alatmusik', [InstrumentController::class, 'store'])->name('alatmusik.store');
    Route::delete('/data-alatmusik/{id}', [InstrumentController::class, 'destroy'])->name('alatmusik.destroy');

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
        return view('user.dashboard');
    })->name('user.dashboard');

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

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// (Opsional) Halaman detail produk
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index'])->name('history.index');

Route::get('/borrowing', [BorrowingController::class, 'create']);
Route::post('/borrowing/store', [BorrowingController::class, 'store'])->name('borrowing.store');

Route::get('/return', [ReturnController::class, 'index'])->name('return.index');
Route::post('/return/{id}', [ReturnController::class, 'process'])->name('return.process');


Route::get('/logout', function () {
    return view('user.logout');
});

Route::get('/profile', function () {
    return view('user.profile');
});

Route::get('/settings', function () {
    return view('user.settings');
});

Route::get('/productdetail', function () {
    return view('user.productdetail');
});
