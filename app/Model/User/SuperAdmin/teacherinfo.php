<?php

namespace App\Model\User\SuperAdmin;

use Illuminate\Database\Eloquent\Model;

class Teacherinfo extends Model
{


    protected $table= "teacher_infos";
    protected $fillable = array('*');


    public function CreatedBy(){


        return $this->belongsTo('App\Model\User\User','created_by');
    }
}