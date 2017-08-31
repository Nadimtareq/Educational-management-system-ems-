<?php

namespace App\Model\Career;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{

    protected $table = "careers";
    protected $fillable = [
        'details','created_by','updated_by'
    ];
    public function createdBy(){

        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\User\User','updated_by');
    }
}
