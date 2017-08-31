<?php

namespace App\Model\User\SuperAdmin;

use Illuminate\Database\Eloquent\Model;

class Studentinfo extends Model
{


    protected $table= "student_infos";
    protected $fillable = array('*');

    public function CreatedBy(){


        return $this->belongsTo('App\Model\User\User','created_by');
    }

    public function User(){

        return $this->belongsTo('App\User\User','users_id');
    }


}