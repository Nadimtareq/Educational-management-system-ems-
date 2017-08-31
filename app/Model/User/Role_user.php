<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{
    protected $table = "role_users";

    protected $primaryKey = "user_id";
    protected  $fillable = array('*');

}
