<?php

namespace App\Model\Account;

use Illuminate\Database\Eloquent\Model;

class DailyAccount extends Model
{
    protected $table = "daily_accounts";

    protected $fillable = array('*');


    public function scopeUser($query,$id)
    {
        return $query->where('user_id', $id);
    }

    public function scopeTecherIX($query,$ix_status)
    {
        return $query->where('ix_status', $ix_status);
    }
    public function scopeStaffIX($query,$ix_status)
    {
        return $query->where('ix_status', $ix_status);
    }

    public function scopeStudentIX($query,$ix_status)
    {
        return $query->where('ix_status', $ix_status);
    }
    public function ContactName(){

        return $this->belongsTo('App\Model\User\User','user_id');
    }

    public function accounttype(){

        return $this->belongsTo('App\Model\Account\AccountType','acc_type');
    }


    public function CreatedBy(){

    return $this->belongsTo('App\Model\User\User','created_by');
    }
    public function UpdatedBy(){

    return $this->belongsTo('App\Model\User\User','updated_by');
    }
}
