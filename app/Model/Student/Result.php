<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = "results";
    protected $fillable = [
        'exams_id', 'users_id', 'subjects_id','mark','created_by','updated_by'
    ];

    public function exam(){
        return $this->belongsTo('App\Model\Student\Exam','exams_id');
    }

    public static function withRoll($c=null,$sec=null,$ses=null)
    {
    return static::Join(
        'studentbatches',
        'studentbatches.user_id', '=', 'results.users_id'
    )->select('studentbatches.student_roll','results.*')->where('studentbatches.sections_id','=',$sec)->where('studentbatches.classes_id','=',$c)->where('studentbatches.sessions_id','=',$ses);
   }

    public static function ByRoll()
    {
        return static::Join(
            'studentbatches',
            'studentbatches.user_id', '=', 'results.users_id'
        )->select('studentbatches.student_roll','results.*');
    }

    public function user(){
        return $this->belongsTo('App\Model\User\User','users_id');
    }

    public function subject()
    {
        return $this->belongsTo('App\Model\Student\Subject','subjects_id');
    }

    public function createdBy(){

        return $this->belongsTo('App\Model\Student\users','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\Student\users','updated_by');
    }
}
