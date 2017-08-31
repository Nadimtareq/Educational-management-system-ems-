<?php

namespace App\Model\Staff;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = "staff";
    protected $fillable = [
        'order', 'about', 'nationality','religion','birth_date','v_id','c_1','c_2','per_add','pre_add','salary_info','salary_note','desination','edu_level','fs_1','fs_2','fs_3','join_date','ending_date','users_id','created_by','updated_by'
    ];

    public function user(){
        return $this->belongsTo('App\Model\Staff\User','users_id');
    }
    public function createdBy(){

        return $this->belongsTo('App\Model\Staff\users','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Model\Staff\users','updated_by');
    }
}
