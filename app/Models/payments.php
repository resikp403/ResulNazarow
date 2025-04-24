<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class payments extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentsFactory> */
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function bookings(): BelongsTo
    {
        return $this->belongsTo(bookings::class);
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
