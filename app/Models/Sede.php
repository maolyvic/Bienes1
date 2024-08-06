<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = 'sede';

    protected $fillable = [
        'nombre',
        'estado_id',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/sedes/'.$this->getKey());
    }
    public function estado() {
        return $this->belongsTo(Estado::class);
    }
    public function coordinacione()
    {
        return $this->hasMany(Coordinacione::class);
    }
}
