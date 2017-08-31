<?php

namespace App\Model\User\SuperAdmin;

use Illuminate\Database\Eloquent\Model;

class Staffinfo extends Model
{

    protected $table= "staff";

    protected $fillable = array('*');

    public function CreatedBy(){


        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function UpdatedBy(){


        return $this->belongsTo('App\Model\User\User','updated_by');
    }

}