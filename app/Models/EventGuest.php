<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventGuest extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'first_name',
        'second_name',
        'email',
        'persons',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
