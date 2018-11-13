<?php

namespace App\Models;

use App\User;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];
    
    public function scopeGetUser($query, $role)
    {
        return $query->find($role)->users();
        
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_roles');
    }
    
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }
}
