<?php

namespace App\Model\Leave;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $table = "leaves";
    protected $fillable = [
        'note', 'start_date','end_date','users_id','terms_id', 'created_by','updated_by'
    ];

    public function scopeByTeacher($query,$id)
    {
        return $query->where('users_id', $id);
    }
    public function scopeByStudent($query,$id)
    {
        return $query->where('users_id', $id);
    }
    public function scopeByStaff($query,$id)
    {
        return $query->where('users_id', $id);
    }
    public function createdBy(){

        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\User\User','updated_by');
    }
}
