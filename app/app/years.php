<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class years extends Model
{
    public $table = 'years';

    protected $fillable = ['session'];
}
