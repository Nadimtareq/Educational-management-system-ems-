<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = "sections";
    protected $fillable = [
        'name', 'classes_id','created_by','updated_by'
    ];
    private $classes_id;


    public function classe(){
        return $this->belongsTo('App\Model\Student\Classe','classes_id' );
    }
    public function createdBy(){

        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\User\User','updated_by');
    }

    public function scopeOfClass($query, $id)
    {
        return $query->where('classes_id', $id);
    }
}
