<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use Carbon\Carbon;
use App\Fileentry;
use App\groups;
use App\department;
use App\years;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with(['title'=>'RCF OAU']);
    }

    public function downloads(){
        $dt = Carbon::now();
        $downloads = Fileentry::paginate(20);
        return view('downloads')->with(['title'=>'message,pdf downloads',
            'downloads'=>$downloads,
            'dt'=>$dt
            ]);
    }
    public function blog(){
        $dt = Carbon::now();
        $posts = posts::paginate(4);
        return view('blog')->with(['title'=>'blogs','posts'=>$posts,'dt'=>$dt]);
    }
    public function register(){
        $groups = groups::all();
        $years = years::all();
        $departments = department::all();
        return view('register')->with(['title'=>'register information',
            'groups'=>$groups,
            'years'=>$years,
            'departments'=>$departments
            ]);
    }
    public function edit(){
        return view('edit')->with(['title'=>'edit information']);
    }
    public function edit_user(){
        return redirect('edit_form')->withInput();
    }
}
