<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StarterKit extends Model
{
    protected $fillable = [
        'workshop_id',
        'name',
        'slug',
        'description',
        'price',
        'currency',
        'is_available',
    ];

    protected $casts = [
        'workshop_id' => 'integer',
        'price' => 'decimal:2',
        'is_available' => 'boolean',
    ];

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }

    public function kitOrders()
    {
        return $this->hasMany(KitOrder::class);
    }
}
