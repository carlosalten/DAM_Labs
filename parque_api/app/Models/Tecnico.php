<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tecnico extends Model
{
    use HasFactory;
    protected $table = 'tecnicos';
    protected $primaryKey = 'rut';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;

    public function mantenimientos():HasMany
    {
        return $this->hasMany(Mantenimiento::class, 'tecnico_rut', 'rut');
    }
}
