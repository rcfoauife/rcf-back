<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class rolesController extends Controller
{
    public function search_user(Request $req){
        $this->validate($req,[
            'user'=>'required'
        ]);
        $users =  User::where("name", "LIKE", "%{$req->input('user')}%")->get();

        return view('admin.roleresults')->with([
                'users'=>$users,
                'title'=>'role search'
            ]);
    }
    public function save(Request $req){
    	$role_ids = $this->get_role_ids($req->all());
    	$this->removeRoles($req->input('user_id'));
    	foreach ($role_ids as $role_id) {
    		$this->addRole($req->input('user_id'),$role_id,$req->input('6'));
    	}
    	return redirect('/admin/users');
    }

    private function removeRoles($user_id){
    	$user = User::find($user_id);
    	$roles = Role::all();
    	foreach ($roles as $role) {
    		if($user->hasRole($role)){
    			$user->removeRole($role);
    		}
    	}
    }

    private function addRole($user_id,$role_id,$description){
    	$role = Role::find($role_id);
    	$user = User::find($user_id);
    	$user->profile->description = $description;
    	$user->save();
    	$user->assignRole($role);
    }

    private function get_role_ids(array $data){
    	$result = [];
        foreach ($data as $id => $val) {
            if($val == "on"){
                array_push($result,$id);
            } 
        }
        return $result;
    }

}
