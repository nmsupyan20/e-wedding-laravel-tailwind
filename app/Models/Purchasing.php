<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Purchasing extends Model
{
    protected $fillable = [
        'address',
        'wedding_date',
        'status',
        'user_id',
        'catalog_id'
    ];

    protected $casts = [
        'wedding_date' => 'date'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function catalog(): BelongsTo
    {
        return $this->belongsTo(Catalog::class);
    }
}
