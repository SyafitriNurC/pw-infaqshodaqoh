<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_infaq extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_pengirim',
        'bank',
        'tanggal_bayar',
        'bukti_bayar',
        'catatan',
        'nominal',
        'status'
    ];
}
