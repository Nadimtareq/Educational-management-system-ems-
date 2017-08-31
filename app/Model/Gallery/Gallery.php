<?php

namespace App\Model\Gallery;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "galleries";
    protected $fillable = [
        'pt_id', 'title', 'details','users_id', 'created_by','updated_by'
    ];

    public function CreatedBy(){


        return $this->belongsTo('App\Model\Gallery\User','created_by');
    }

    public function UpdatedBy(){


        return $this->belongsTo('App\Model\Gallery\User','updated_by');
    }
}
