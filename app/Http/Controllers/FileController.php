<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;

class FileController extends Controller
{
    public function index($id)
	{
		$file = Upload::find($id);
		$pathToFile = 'uploads/'.$file->file_url;
		return response()->download($pathToFile);//view('download');
	}
}
