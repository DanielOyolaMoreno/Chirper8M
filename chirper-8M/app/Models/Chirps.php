<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirps extends Model
{
    protected $fillable = [
        'image_url',
        'mensaje',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

