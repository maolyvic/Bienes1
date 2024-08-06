<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BienesNacionale extends Model
{
    protected $fillable = [
        'descripcion',
        'color',
        'marca',
        'modelo',
        'serial',
        'numero_oficina',
        'numero_bien',
        'codigo',
        'id_coordinaciones',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/bienes-nacionales/'.$this->getKey());
    }
    public function coordinaciones() {
        return $this->belongsTo(Coordinacione::class);
    }
}
