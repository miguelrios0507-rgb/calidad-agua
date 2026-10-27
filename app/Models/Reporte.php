<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    
    //protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'reportes';

    protected $fillable = [
        'user_id',
        'descripcion',
        'ubicacion',
        'fecha_inicio',
        'folio'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
