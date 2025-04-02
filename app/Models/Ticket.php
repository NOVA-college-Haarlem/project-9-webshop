<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'naam',
        'beschrijving',
        
    ];

    public function checkout()
    {
        return $this->hasMany(Checkout::class);
    }
}
