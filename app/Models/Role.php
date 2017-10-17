<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $hidden = ['id'];

    public function users()
    {
        return $this->belongsToMany(\User::class, 'role_users');
    }
}
