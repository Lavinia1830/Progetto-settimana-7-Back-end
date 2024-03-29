<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descrizione',
        'data',
        'orario',
        'durata',
        'livello',
        'created_at',
        'updated_at'
    ];
    public function reservations()
    {
        return $this->hasMany(Prenotazione::class);
    }
}
