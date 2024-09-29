<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mantenimiento extends Model
{
    use HasFactory;
    protected $table = 'mantenimientos';
    public $timestamps = false;

    public function juego():BelongsTo
    {
        return $this->belongsTo(Juego::class);
    }

    public function tecnico():BelongsTo
    {
        return $this->belongsTo(Tecnico::class, 'tecnico_rut', 'rut');
    }
}
