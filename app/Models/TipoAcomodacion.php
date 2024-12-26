<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAcomodacion extends Model
{
    use HasFactory;
    public $timestamps = true;
    //protected $table = 'tipo_acomodacion';
    protected $fillable = [
        'id',
        'hotel_id',
        'tipo_habitacion_id',
        'acomodacion_id',
        'cantidad',
    ];
    
}
