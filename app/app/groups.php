<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
    public $table = 'groups';

    protected $fillable = ['name'];
}
