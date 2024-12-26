<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'id',
        'nombre',
        'direccion',
        'ciudad',
        'nit',
        'numero_habitaciones',
    ];

    public function TipoAcomodaciones() {
        return $this->belongsTo('App\Models\TipoAcomodacion');
    }
}
