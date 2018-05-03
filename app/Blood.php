<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    protected $fillable = ['name'];
    public function donors()
    {
    	return $this->hasMany(Donor::class);
    }
    public function patients()
    {
    	return $this->hasMany(Patient::class);
    }
   
}
