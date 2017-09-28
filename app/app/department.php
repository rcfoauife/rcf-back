<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    public $table = 'departments';

    protected $fillable = [
    	'name'
    ];
}
