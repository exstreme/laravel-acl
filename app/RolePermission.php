<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    protected $table = 'role_permissions';

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}
