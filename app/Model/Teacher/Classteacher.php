<?php

namespace App\Model\Teacher;

use Illuminate\Database\Eloquent\Model;

class Classteacher extends Model
{
    protected $table = "classteachers";
    protected $fillable = [
        'users_id', 'classes_id','sessions_id','sections_id','terms_id', 'created_by','updated_by'
    ];


    public function classe(){
        return $this->belongsTo('App\Model\Student\Classe','classes_id'  );
    }

    public function session(){
        return $this->belongsTo('App\Model\Student\Session','sessions_id' );
    }
    public function section(){
        return $this->belongsTo('App\Model\Student\Section','sections_id');
    }

    public function user(){

        return $this->belongsTo('App\Model\User\User','users_id');
    }

    public function scopeTecher($query,$id)
    {
        return $query->where('users_id', $id);
    }

    public function scopeCurrentYear($query,$year)
    {
        $query->whereYear('created_at', '=', $year);
    }
    public function createdBy(){

        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\User\User','updated_by');
    }
}
