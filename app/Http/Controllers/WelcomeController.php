<?php

namespace App\Http\Controllers;
use App\Upload;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
     public function index()
    {

    	// if (isset($_POST["mailfrom"])) {
    	// 	return view('succes');
    	// }else{
        return view('test');
        //}
    }

    public function upload(Request $request){
    	// dd($request->file_url->getClientOriginalName());
    	$upload = new Upload($request->except('csrf_token'));
    	$fname = Storage::disk('upload')->put('', $request->file_url);
    	$upload->file_url = $fname;
    	$upload->save();
    	// return view('test');
    	
    }
}
