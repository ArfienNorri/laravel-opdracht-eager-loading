<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SolarSystem extends Model
{
    public function planets(): HasMany
    {
        return $this->hasMany(Planet::class);
    }
}
