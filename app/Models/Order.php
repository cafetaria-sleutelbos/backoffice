<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'status',
        'is_adjusted',
        'is_phone,'
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot('amount');
    }
}
