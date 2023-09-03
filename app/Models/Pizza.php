<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pizza extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = [
        'chef',
        'last_updated',
    ];

    protected $casts = [
        'toppings' => 'array',
    ];

    protected $hidden = [
        'user',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function chef(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->user->name,
        );
    }

    public function lastUpdated(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->updated_at->diffForHumans(),
        );
    }
}
