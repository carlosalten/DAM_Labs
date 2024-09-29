<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Juego extends Model
{
    use HasFactory;
    protected $table = 'juegos';
    public $timestamps = false;

    public function categoria():BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function mantenimientos():HasMany
    {
        return $this->hasMany(Mantenimiento::class);
    }
}
