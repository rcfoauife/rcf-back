<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $fillable = [
    	'title'
    ];

    public $table = 'posts';

    public function paras(){
        return $this->hasMany('App\paragraphs','postId');
    }

    public function delete(){
        $this->paras()->delete();
        return parent::delete();
    }
}
