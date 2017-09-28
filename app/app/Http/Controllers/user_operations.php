<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;
use App\years;
use App\User;
use App\Role;


class user_operations extends Controller
{
    public function setSession(Request $req){
    	$this->validate($req,[
    		'session' => 'required'
    	]);
        //set current
    	$this->clearSession();
        //not required
    	$this->removeRoles();
    	$year = years::find($req->input('session'));
    	$year->current = 'now';
    	$year->save();

        //set alumni
    	$profiles = profile::all();
    	foreach ($profiles as $profile) {
    		if($profile->grad_id > $req->input('session')){
    			$profile->alumni = true;
    			$profile->save();
    		}
    	}
        return redirect->back();
    }

    //set current tags to empty on all session records
    private function clearSession(){
    	$years = years::all();
    	foreach ($years as $year) {
    		$year = years::find($year->id);
    		$year->current = '';
    	}
    }

    //not required 
    private function removeRoles(){
    	$users = User::all();
    	$roles_id = [1,2,4,5];

    	foreach ($roles_id as $id) {
    		$role = Role::find($id);
    		foreach ($users as $user) {
    			if($user->hasRole($role)){
    				$user->removeRole($role);
    			}
    		}
    	}
    }
}
