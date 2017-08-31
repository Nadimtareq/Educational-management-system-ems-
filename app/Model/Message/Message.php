<?php

namespace App\Model\Message;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "messages";
    protected $fillable = [
        'm_type', 'mesage','title','users_id', 'created_by','updated_by'
    ];

    public function createdBy(){

        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\User\User','updated_by');
    }
   /* public function createdBy(){

        return $this->belongsTo('App\Model\Message\users','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\Message\users','updated_by');
    }*/
}
