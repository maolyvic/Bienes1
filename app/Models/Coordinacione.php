<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinacione extends Model
{
    protected $fillable = [
        'nombre',
        'id_sede',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/coordinaciones/'.$this->getKey());
    }
    public function sede() {
        return $this->belongsTo(Sede::class);
    }
    public function bieneNacionale()
    {
        return $this->hasMany(BienesNacionale::class);
    }
}
