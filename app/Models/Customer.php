<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
    ];

    use HasFactory;

    public function socialNetworks(): \Illuminate\Database\Eloquent\Relations\hasMany
    {
        return $this->hasMany(CustomerSocialNetwork::class);
    }
}
