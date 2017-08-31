<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $table = "terms";
    protected $fillable = [
        'title', 'created_by','updated_by'
    ];


    public function createdBy(){

        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\User\User','updated_by');
    }
}
