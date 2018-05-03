<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mariage extends Model
{
    protected $fillable = ['user_id', 'hus_name' ,'wife_name','wife_parent_name','hus_ssn','wife_ssn','wife_parent_ssn','witness_1_ssn','witness_2_ssn','amount','sce_q','sce_a','file_path'];

    public function user_id()
    {
    	return $this->belongsTo(User::class);
    }
}
 
 