<?php

namespace App\Model\Elibrary;

use App\Model\Student\Classs;
use Illuminate\Database\Eloquent\Model;

class Elibrary extends Model
{
    protected $table = "elibraries";

    protected $fillable = array('*');

    public function scopeByTeacher($query,$id)
    {
        return $query->where('created_by', $id);
    }
    public function CreatedBy(){


        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function Ofclass(){


        return $this->belongsTo('App\Model\Student\Classe','classes_id');
    }
}
