<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $table = "classes";

    protected $fillable = array('*');


    public function createdBy(){

        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\User\User','updated_by');
    }
}
