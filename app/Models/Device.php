<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    public function roomes()
    {
        return $this->belongsTo(Room::class);
    }

    public function sensors()
    {
        return $this->hasMany(Sensor::class, 'device_id')->with('parameters');
    }


}
