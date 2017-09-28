<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    public $table = 'profiles';

    protected $fillable = [
    	'phone','address','sex',
		'description','department',
		'YearOfGraduation','birth','user_id','group_id',
		'grad_id','alumni','subscribed'
    ];

   public function group(){
   		return $this->belongsTo('App\groups','group_id');
   }
}
