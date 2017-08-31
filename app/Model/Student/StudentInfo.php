<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    protected $table = "student_infos";
    protected $fillable = [
        'order', 'about', 'nationality','religion','birth_date','v_id','c_1','c_2','per_add','pre_add','gurname','gur_c1','gur_c1','users_id','created_by','updated_by'
    ];


    public function scopeByStudent($query,$id)
    {
        return $query->where('users_id', $id);
    }
    public function user(){
        return $this->belongsTo('App\Model\Student\User','users_id');
    }
    public function createdBy(){

        return $this->belongsTo('App\Model\Student\users','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\Student\users','updated_by');
    }
}
