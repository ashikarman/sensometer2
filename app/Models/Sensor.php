<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    public function parameters()
    {
        return $this->belongsToMany(ParameterList::class, 'pvot_senso_paras');
    }

    public function devices()
    {
        return $this->hasOne(Device::class);
    }

    public function sensors()
    {
        return $this->hasMany(Sensor::class, 'device_id');
    }
}
