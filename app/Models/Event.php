<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $filable = [
        'name',
        'date',
    ];

    public function guests(): HasMany
    {
        return $this->hasMany(EventGuest::class);
    }
}
