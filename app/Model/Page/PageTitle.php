<?php

namespace App\Model\Page;

use Illuminate\Database\Eloquent\Model;

class PageTitle extends Model
{
    protected $table = "page_titles";
    protected $fillable = [
        'title','created_by','updated_by'
    ];
    public function createdBy(){

        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\User\User','updated_by');
    }
}
