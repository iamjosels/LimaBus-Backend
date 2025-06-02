<?php

namespace App\Models;

use App\Models\Route;
use App\Models\Driver;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    public function route()
    {
        return $this->belongsTo(BusRoute::class);
    }

    public function drivers()
    {
        return $this->hasMany(Driver::class);
    }

}
