<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
     public function index()
    {
    	// if (isset($_POST["mailfrom"])) {
    	// 	return view('succes');
    	// }else{
        return view('welcome');
        //}
    }

    public function upload(Request $request){
    	 return 'Le nom est ' . $request->input('mailfrom');
    }
}
