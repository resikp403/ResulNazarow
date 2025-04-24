<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class bookings extends Model
{
    /** @use HasFactory<\Database\Factories\BookingsFactory> */
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Station(): BelongsTo
    {
        return $this->belongsTo(Stations::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(payments::class);
    }

    public function getStatus()
    {
        return [
            'reserved',
            'active',
            'finished',

        ][$this->status];
    }
}
