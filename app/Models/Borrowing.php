<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    // Optional: sebenarnya Laravel sudah otomatis mengenali 'peminjamans' dari nama model ini
    protected $table = 'peminjamans';

    protected $fillable = [
        'nama_pemesan',
        'alat_musik',
        'tanggal_sewa',
        'metode_pembayaran',
        'status'
    ];
}
