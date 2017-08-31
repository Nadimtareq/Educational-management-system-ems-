<?php

namespace App\Model\Account;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
  protected $table = "account_types";

    protected $fillable = array('*');

    public function DailyAccount()
    {
        return $this->hasMany('App\Model\Account\DailyAccount','acc_type');
    }


    public function CreatedBy(){


        return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function UpdatedBy(){


        return $this->belongsTo('App\Model\User\User','updated_by');
    }

}
