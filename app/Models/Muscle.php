<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Muscle extends Model
{
    protected $fillable = ['name'];

    public function exercises(): BelongsToMany
    {
        return $this->belongsToMany(Exercise::class)
            ->withPivot('is_primary')
            ->withTimestamps();
    }
}
