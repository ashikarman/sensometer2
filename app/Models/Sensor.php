<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    public function parameters()
    {
        return $this->belongsToMany(ParameterList::class , 'pvot_senso_paras','parameter_id','id');
    }

    public function devices()
    {
        return $this->hasOne(Device::class);
    }

   
}
