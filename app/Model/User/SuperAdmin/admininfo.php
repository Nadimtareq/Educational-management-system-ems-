<?php

namespace App\Model\User\SuperAdmin;

use Illuminate\Database\Eloquent\Model;

class Admininfo extends Model
{

  protected $table= "admininfos";

    protected $fillable = ['user_id', 'phone'];

    public function CreatedBy(){


        return $this->belongsTo('App\Model\User\User','created_by');
    }
}
