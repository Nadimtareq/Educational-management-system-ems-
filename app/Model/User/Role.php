<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    public function users()
    {
        return $this->belongsToMany('App\Model\User\User','Role_users');
    }

    public function scopeAdminOnly($query,$role){


        return $query->where('slug', $role);
    }

}
