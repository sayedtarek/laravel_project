<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twkel extends Model
{
    protected $fillable = ['user_id','party_1_ssn','party_2_name','party_2_ssn','party_1_name','amount','sce_q','sce_a','file_path'];

    public function user_id()
    {
    	return $this->belongsTo(User::class);
    }
}
 