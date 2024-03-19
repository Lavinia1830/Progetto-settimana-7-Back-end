<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prenotazione extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'corso_id',
        'stato',
        'created_at',
        'updated_at'
    ];

    /* public function prenotaziones(): HasMany {
        return $this->hasMany(Prenotazione::class);
    } */
}
