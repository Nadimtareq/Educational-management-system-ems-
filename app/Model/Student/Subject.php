<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = "subjects";
    protected $fillable = [
        'title','description','classes_id','created_by','updated_by'
    ];

    public function results()
    {
        return $this->hasMany('App\Model\Student\Result', 'subjects_id');
    }

    public function classe(){
        return $this->belongsTo('App\Model\Student\Classe','classes_id');
    }
    public function createdBy(){

        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\User\User','updated_by');
    }
}
