<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'cooking_time',
        'complexity',
        'price',
    ];

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }

    public function Media(): MorphMany
    {
        return $this->morphMany(Media::class, 'model');
    }
}
