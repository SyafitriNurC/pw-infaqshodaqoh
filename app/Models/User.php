<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Rayon;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rayon_id',
        'nama',
        'nis',
        'username',
        'role',
        'subrole',
        'waktu_kelulusan',
        'waktu_masuk',
        'rombel',
        'kelas',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // public function role()
    // {
    //     return $this->belongsTo(Role::class);
    // }

    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }

    public function infaqs()
    {
        return $this->hasMany(Infaq::class);
    }

    public function tagihans()
    {
        return $this->hasMany(Tagihan::class);
    }
}
