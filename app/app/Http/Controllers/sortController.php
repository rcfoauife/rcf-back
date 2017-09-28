<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\profiles;
use App\groups;
use App\years;
use App\department;

class sortController extends Controller
{
	private $param = [];


	public function sort(Request $req){
		$this->add_param($req->all());
		$param = $this->param;
		$users = User::whereHas('profile', function($q)use($param)
            {
              $q->where($param);
            })->paginate(30);
		$groups = groups::all();
        $years = years::all();
        $departments = department::all();

    	return view('admin.allUsers')->with(['title'=>'all Users on the Platform',
            'groups' => $groups,
            'years' => $years,
            'departments' => $departments,
            'users' => $users,
            ]);
	}

    public function add_param(array $data){
    	foreach ($data as $key => $value) {
    		if($key[0] === 'o'){
    			$this->param[substr($key, 1)] = $data[substr($key, 1)];
    		}
    	}
    }

    public function search(Request $req){
    	$groups = groups::all();
        $years = years::all();
        $departments = department::all();
        $users = User::where("name", "LIKE", "%{$req->input('q')}%")->paginate(30);
        return view('admin.allUsers')->with(['title'=>'all Users on the Platform',
            'groups' => $groups,
            'years' => $years,
            'departments' => $departments,
            'users' => $users,
            ]);
    }
}
