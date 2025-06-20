<?php

// app/Models/Borrowing.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $fillable = [
        'instrument_id', 'duration', 'start_date', 'payment_method'
    ];

    public function instrument()
{
    return $this->belongsTo(Instrument::class, 'id');
}

}