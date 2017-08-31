<?php

namespace App\Model\Certificate;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{


    public function ctype(){

        return $this->belongsTo('App\Model\Certificate\CertificateType','cttype_id');
    }
    public function appclass(){

        return $this->belongsTo('App\Model\Student\Classe','classes_id');
    }
    public function appsection(){

        return $this->belongsTo('App\Model\Student\Section','sections_id');
    }
    public function appsession(){

        return $this->belongsTo('App\Model\Student\Session','sessions_id');
    }
    public function CreatedBy(){


        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function UpdatedBy(){


        return $this->belongsTo('App\Model\User\User','updated_by');
    }
}
