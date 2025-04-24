<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class stations extends Model
{
    //
    use HasFactory;

    public function booking(): HasMany
    {
        return $this->hasMany(booking::class);
    }
//    public function getStatus()
//    {
//        return [
//            'Available',
//            'Busy',
//            'Offline',
//
//        ][$this->status];
//    }

//    public function getType()
//    {
//        return [
//            'PS',
//            'PC',
//        ][$this->status];
//    }
}
