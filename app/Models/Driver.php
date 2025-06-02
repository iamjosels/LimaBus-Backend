<?php

namespace App\Models;

use App\Models\Bus;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

}
