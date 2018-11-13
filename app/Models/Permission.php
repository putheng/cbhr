<?php

namespace App\Models;

use App\Role;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name'];
    
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_permissions');
    }
}
