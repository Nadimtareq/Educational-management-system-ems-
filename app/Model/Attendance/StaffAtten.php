<?php

namespace App\Model\Attendance;

use Illuminate\Database\Eloquent\Model;

class StaffAtten extends Model
{
    protected $table = "staff_attens";

    protected $fillable = array('*');

    public function scopeUser($query,$id)
    {
        return $query->where('users_id', $id);
    }

    public function scopeByStaffAtten($query,$id)
    {
        return $query->where('users_id', $id);
    }
}
