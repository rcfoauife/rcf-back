<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\fileentry;
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class FileEntryController extends Controller
{
   
	public function add(Request $req) {
		$file = $req->file('fileField');
	
			$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getClientOriginalName(), File::get($file));
		$entry = new Fileentry();
		$entry->mime = $file->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->filename = $req->input('recommend') ? $req->input('recommend') : $file->getClientOriginalName();
 
		$entry->save();

		return redirect()->back()->withSuccessMessage('The file has been uploaded successfully');
	}

	public function get($filename){ 
		$entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
		$file = storage_path('app\\'.$entry->original_filename);
 		
		return response()->download($file, $entry->original_filename,['Content-Type'.$entry->mime]);
	}
 
}
