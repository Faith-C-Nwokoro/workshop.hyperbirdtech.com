<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KitOrder extends Model
{
    protected $fillable = [
        'kit_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'amount',
        'currency',
        'payment_reference',
        'status',
    ];

    protected $casts = [
        'kit_id' => 'integer',
        'amount' => 'decimal:2',
    ];

    public function starterKit()
    {
        return $this->belongsTo(StarterKit::class, 'kit_id');
    }
}
