<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Planet extends Model
{
    public function solarSystem(): BelongsTo
    {
        return $this->belongsTo(SolarSystem::class);
    }
}
