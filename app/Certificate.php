<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = ['name','user_id','title','ssn','location','amount','sce_q','sce_a','file_path'];

    public function user_id()
    {
    	return $this->belongsTo(User::class);
    }
}
 