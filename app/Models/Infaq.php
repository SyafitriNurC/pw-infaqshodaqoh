<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infaq extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'pengirim',
        'bank',
        'waktu_pembayaran',
        'catatan',
        'bukti_pembayaran',
        'status',
        'nominal',
    ];

    // public function rombel()
    // {
    //     return $this->belongsTo(Rombel::class);
    // }

    // public function subRole()
    // {
    //     return $this->belongsTo(Sub_role::class, 'sub_role_id');
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
