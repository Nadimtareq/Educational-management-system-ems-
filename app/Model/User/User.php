<?php

namespace App\Model\User;

use App\Model\User\Role;
use App\Model\User\Activation;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['email','password','first_name','phone'];

    protected $loginNames = ['email', 'phone'];
     public function activation()
    {
      return $this->hasOne('App\Model\User\Activation','user_id');
    }

    public function roles()
    {

        return $this->belongsToMany('App\Model\User\Role','Role_users');
    }



    public function scopeAdminOnly($query,$role){


        return $query->where('slug', $role);
    }

    public function scopeEmail($query,$email){


    return $query->where('email','=', $email);
   }
    public function scopePassword($query,$password){


    return $query->where('password','=', $password);
    }

    public function scopeUsername($query,$phone){

    return $query->where('phone',$phone);
    }
    public function scopeId($query,$id){


        return $query->where('id', $id);
    }

    public function scopeToken($query,$token){


        return $query->where('token', $token);
    }

    public function Admindinfo(){

        return $this->hasOne('App\Model\User\SuperAdmin\admininfo','user_id');
    }

    public function teacherinfo(){

    return $this->hasOne('App\Model\User\SuperAdmin\teacherinfo','users_id');
    }
    public function staffinfo(){

        return $this->hasOne('App\Model\User\SuperAdmin\staffinfo','users_id');
    }

    public function Studentinfo(){

        return $this->hasOne('App\Model\User\SuperAdmin\studentinfo','users_id');
    }



}
