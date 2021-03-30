<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParameterList extends Model
{
    use HasFactory;

    public function sensors()
    {
        return $this->belongsToMany(Sensor::class, 'pvot_senso_paras');
    }



}
