<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\paragraphs;


class blogController extends Controller
{
	public function index(){
		$posts = posts::paginate(10);
		return view(posts);
	}

	public function store(Request $req){
		//validate title and image
	   	$this->isValid($req);
	   	//save image
	   	$this->saveImage($req->file('fileUpload'),$req->input('title'));
	   	//create array of paragraphs from string
	   	$paragraphs = $this->cleanData($req->input('string'));
	   	//create post
	   	$post = posts::create([
	   		'title' => $req->input('title')
	   	]);
	   	//create paragraphs
	   	foreach ($paragraphs as $paragraph) {
	   	 	$post->paras()->create([
		    	'paragraph' => $paragraph,
			]);
	   	}
	   	return redirect()->back();
	}

	private function saveImage($image,$name){
		$imageName = str_replace(" ","-",$name).'.jpg';
		$image->move(
            base_path() . '/public/blog/images/', $imageName
        );
	}

	private function cleanData($string){
		//same character as used for the angular build
		$characterList = explode('^', $string);
	    $RealList = [];
	    foreach ($characterList as $character) {
	        if ($character !==''){
	            array_push($RealList,$character);
	        }
	    }
	    return $RealList;
   }

   private function isValid($data){
   	 $this->validate($data, [
        'title' => 'required|unique:posts|max:255',
        'fileUpload' => 'required|image'
    ]);
   }

   public function destroy($id){
   	 posts::find($id)->delete();
   	 return redirect()->back()->withSuccessMessage('the post has been successfully removed');
   }
}
