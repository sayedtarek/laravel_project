<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontract extends Model
{
    protected $fillable = ['user_id','seller_name','buyer_name','seller_ssn','buyer_ssn','amount','sce_q','sce_a','file_path'];

    public function user_id()
    {
    	return $this->belongsTo(User::class);
    }
}
 