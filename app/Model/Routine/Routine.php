<?php

namespace App\Model\Routine;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    protected $table = "routines";
    protected $fillable = [
        'type', 'classes_id','details','created_by','updated_by'
    ];

    public function classe(){
        return $this->belongsTo('App\Model\Student\Classe','classes_id'  );
    }

    public function createdBy(){

        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\User\User','updated_by');
    }
}
