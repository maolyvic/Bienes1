<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';

    protected $fillable = [
        'nombre',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/estados/'.$this->getKey());
    }
    public function sede()
{
    return $this->hasMany(Sede::class);
}
public function flotaVehicular()
{
    return $this->hasMany(FlotaVehicular::class);
}
}
