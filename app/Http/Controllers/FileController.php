<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Upload;

class FileController extends Controller
{
    public function index($id)
	{
		$file = Upload::find($id);		
		return view('download', compact('file'));
	}

    public function download($id)
	{
		$file = Upload::find($id);
		// mail
		
		return Storage::disk('upload')->download($file->file_url, $file->real_name);
	}
}
