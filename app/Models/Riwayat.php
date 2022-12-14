<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nasabah_id',
        'borrow_date',
        'is_paid',
        'remaining_payment',
        'loan_nominal',
    ];

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class);
    }
}
