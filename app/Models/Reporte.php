<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reporte extends Model
{
    
    use HasFactory;

    protected $fillable = ['user_id', 'ubicacion', 'descripcion', 'fecha_inicio', 'folio'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
