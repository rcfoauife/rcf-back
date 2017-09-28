<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\fileentry;
use App\years;
use App\User;
use App\groups;
use App\department;

class adminMajorController extends Controller
{
    public function dashboard(){
        $years = years::all();
        $current = years::where('current','now')->first();
        $users = User::all();
        return view('admin.dashboard')->with(['title'=>'set Session','years'=>$years,'users'=>$users,'current'=>$current]);
    }
    public function allUsers(){
        $groups = groups::all();
        $years = years::all();
        $departments = department::all();
        $users = User::with('profile')->paginate(30);

    	return view('admin.allUsers')->with(['title'=>'all Users on the Platform',
            'groups' => $groups,
            'years' => $years,
            'departments' => $departments,
            'users' => $users,
            ]);
    }

    public function subGroup(){
    	return view('admin.subGroup')->with(['title'=>'my Sub Group']);
    }

    public function users(){
        $users = User::all();
    	return view('admin.subGroups')->with(['title'=>'site administrators','users'=>$users,'admins'=>[]]);
    }

    public function addPost(){
        $posts = posts::orderBy('created_at','asc')->paginate(10);
    	return view('admin.addPost')->with(['title'=>'add new Post','posts'=>$posts]);
    }
    public function addDownload(){
        $uploads = Fileentry::all();
        return view('admin.addDownload')->with(['title'=>'add a New Download','uploads'=>$uploads]);
    }
    public function addRole($id){
        $user = User::find($id);
        return view('admin.addRole')->with(['title'=>'add role to a user',
                'user'=>$user
            ]);
    }
}
