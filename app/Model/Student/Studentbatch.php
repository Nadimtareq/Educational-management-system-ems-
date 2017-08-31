<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Studentbatch extends Model
{
    protected $table = "studentbatches";
    protected $fillable = [
        'classes_id', 'sessions_id', 'sections_id','status','student_roll','created_by','updated_by'
    ];

    public function user(){
    return $this->belongsTo('App\Model\User\User', 'user_id' );
    }
    public function studentinfo(){
        return $this->belongsTo('App\Model\Student\StudentInfo', 'user_id','users_id');
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
    public function scopeBatch($query,$id)
    {
        return $query->where('user_id', $id);
    }

    public function scopeCurrentYear($query,$year)
    {
        $query->whereYear('created_at', '=', $year);
    }
   public function createdBy(){

       return $this->belongsTo('App\Model\usersModel','created_by');
   }
    public function updatedBy(){

        return $this->belongsTo('App\Model\usersModel','updated_by');
    }


}
