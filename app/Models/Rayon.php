<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rayon extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_rayon',
        'pembimbing',
    ];

//     public function subRole(): HasMany
//     {
//         return $this->hasMany(Sub_role::class);
//     }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
