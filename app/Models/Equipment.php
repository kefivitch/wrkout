<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $fillable = ['name'];
    protected $table = 'equipments';

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }
}
