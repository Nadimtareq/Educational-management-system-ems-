<?php

namespace App\Model\Gallery;

use Illuminate\Database\Eloquent\Model;

class GalleryCat extends Model
{
  protected $table = "gallery_cats";


    public function CreatedBy(){


        return $this->belongsTo('App\Model\Gallery\User','created_by');
    }

    public function UpdatedBy(){


        return $this->belongsTo('App\Model\Gallery\User','updated_by');
    }
}
