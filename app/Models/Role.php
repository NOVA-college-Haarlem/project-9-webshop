<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // public function permissions()
    // {
    //     return $this->belongsToMany(Permission::class);
    // }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role' , 'role_id', 'user_id');	
    }
}
