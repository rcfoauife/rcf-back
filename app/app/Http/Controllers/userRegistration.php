<?php

namespace App\Http\Controllers;
use App\User;
use App\profiles;
use App\years;
use Illuminate\Http\Request;
use \Hash as Hash;

class userRegistration extends Controller
{
    public function create(Request $req){
    	$this->isValid($req);
    	$user = User::create([
            'name'     => $req->input('name'),
            'email'         => $req->input('email'),
            'password'      => Hash::make($req->input('email')),
        ]);
        $this->save_profile($user,$req->all());
        return view('thanks')->with(['title'=>'thanks']);
    }

    private function save_profile($user,array $data){
        $year = years::find($data['graduating']);
        $check = years::where('current','now')->first();
        
        $alumni = $check->id < $year->id ? true : false;
    	$user->profile()->create([
        	'phone' => $data['phone'],
        	'address' => $data['address'],
        	'sex' => $data['sex'],
			'department' => $data['department'],
			'YearOfGraduation' => $year->session,
			'birth' => $data['birth'],
            'grad_id' => $year->id,
            'alumni' => $alumni,
            'group_id' => $data['group_id']||null
        ]);
    }

    private function isValid(Request $req){
    	$this->validate($req, [
	        'name' => 'required',
	        'email' => 'required|unique:users',
	        'phone' => 'required',
	        'address' => 'required',
	        'sex' => 'required',
	        'department' => 'required',
	        'graduating' => 'required',
	        'birth' => 'required'
    	]);

    }
}
