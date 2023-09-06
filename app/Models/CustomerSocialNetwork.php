<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSocialNetwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'social_network_id',
        'url',
    ];

    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function social_network(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SocialNetwork::class);
    }
}
