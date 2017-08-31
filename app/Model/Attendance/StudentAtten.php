<?php

namespace App\Model\Attendance;

use Illuminate\Database\Eloquent\Model;

class StudentAtten extends Model
{
    protected $table = "student_attens";

    protected $fillable = array('*');


    public function scopeMyClass($query,$id)
    {
        return $query->where('classes_id', $id);
    }
    public function scopeMySession($query,$id)
    {
        return $query->where('sessions_id', $id);
    }
    public function scopeMySection($query,$id)
    {
        return $query->where('sections_id', $id);
    }
    public function scopeByStudentAtten($query,$id)
    {
        return $query->where('users_id', $id);
    }
    public function scopeUser($query,$id)
    {
        return $query->where('user_id', $id);
    }
    public function studentclass(){
        return $this->belongsTo('App\Model\Student\Classe','classes_id');
    }
    public function session(){
        return $this->belongsTo('App\Model\Student\Session','sessions_id');
    }
    public function section(){
        return $this->belongsTo('App\Model\Student\Section', 'sections_id' );
    }
    public function Roll(){

        return $this->belongsTo('App\Model\Student\Studentbatch','user_id','user_id');
    }
    public function createdBy(){

        return $this->belongsTo('App\Model\Attendance\users','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\Attendance\users','updated_by');
    }
}
