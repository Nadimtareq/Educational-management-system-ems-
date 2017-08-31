<?php

namespace App\Model\Notice;

use Illuminate\Database\Eloquent\Model;

class Noticeboard extends Model
{
  protected $table = "noticeboards";

  protected $fillable = array('*');

 public function NoticeType(){

     return $this->belongsTo('App\Model\Notice\NoticeType','type_id');
 }

    public function CreatedBy(){


        return $this->belongsTo('App\Model\User\User','created_by');
    }

    public function UpdatedBy(){


        return $this->belongsTo('App\Model\User\User','updated_by');
    }

}
