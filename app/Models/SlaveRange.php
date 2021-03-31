<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlaveRange extends Model
{
    use HasFactory;

    public function parameters()
    {
        return $this->belongsToMany(ParameterList::class, 'pvot_slave_parameters');
    }
}
