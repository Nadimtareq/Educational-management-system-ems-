<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = "exams";
    protected $fillable = [
        'name', 'classes_id','sessions_id','sections_id','terms_id', 'created_by','updated_by'
    ];


    public static function withWifi()
    {
        return static::Join(
            'sessions',
            'sessions.id', '=', 'exams.sessions_id'
        )->select('sessions.title','exams.*',\DB::raw('sum(exams.sections_id * exams.classes_id) as total'))->where('exams.sections_id','<','5');
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
    public function classe(){
        return $this->belongsTo('App\Model\Student\Classe','classes_id'  );
    }

    public function session(){
        return $this->belongsTo('App\Model\Student\Session','sessions_id' );
    }
    public function section(){
        return $this->belongsTo('App\Model\Student\Section','sections_id');
    }

    public function term(){
        return $this->belongsTo('App\Model\Student\Term','terms_id');
    }
    public function createdBy(){

        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\User\User','updated_by');
    }
}
