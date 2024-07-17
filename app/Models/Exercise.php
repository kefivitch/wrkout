<?php

namespace App\Models;

use App\Enums\ExerciseForce;
use App\Enums\ExerciseLevel;
use App\Enums\ExerciseMechanic;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'force',
        'level',
        'mechanic',
        'instructions',
    ];

    protected function casts()
    {
        return [
            'force' => ExerciseForce::class,
            'level' => ExerciseLevel::class,
            'mechanic' => ExerciseMechanic::class,
        ];
    }

    public function muscles(): BelongsToMany
    {
        return $this->belongsToMany(Muscle::class)
            ->withPivot('is_primary')
            ->withTimestamps();
    }

    public function equipment(): BelongsTo
    {
        return $this->belongsTo(Equipment::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
