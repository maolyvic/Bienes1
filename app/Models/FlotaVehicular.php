<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlotaVehicular extends Model
{
    protected $table = 'flota_vehicular';

    protected $fillable = [
        'id_estado',
        'tipo_vehiculo',
        'marca',
        'modelo',
        'color',
        'año',
        'placa',
        'serial_motor',
        'serial_carroceria',
        'caucho',
        'rin',
        'numero_oficina',
        'estado_de_uso',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/flota-vehiculars/'.$this->getKey());
    }
    public function estado() {
        return $this->belongsTo(Estado::class);
    }
}
