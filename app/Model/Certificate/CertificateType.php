<?php

namespace App\Model\Certificate;

use Illuminate\Database\Eloquent\Model;

class CertificateType extends Model
{
   protected $table = "certificate_types";

    protected $fillable = array('*');

    public function CreatedBy(){


        return $this->belongsTo('App\Model\Certificate\User','created_by');
    }
    public function UpdatedBy(){


        return $this->belongsTo('App\Model\Certificate\User','updated_by');
    }
}
