<?php

namespace App\Model\Page;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = "pages";
    protected $fillable = [
        'pt_id','title','datails','created_by','updated_by'
    ];
    public function createdBy(){

        return $this->belongsTo('App\Model\User\User','created_by');
    }

    public function updatedBy(){

        return $this->belongsTo('App\Model\User\User','updated_by');
    }
    /*public function updatedBy(){

        return $this->belongsTo('App\Model\Page\users','updated_by');
    }*/
}
