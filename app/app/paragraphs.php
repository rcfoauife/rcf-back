<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paragraphs extends Model
{
    protected $fillable = [
    	'postId',
    	'paragraph'
    ];

    public $table = 'paragraphs';
}
