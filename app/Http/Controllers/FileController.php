<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReturn;
use App\Upload;

class FileController extends Controller
{
    public function index($id)
	{
		$file = Upload::find($id);		
		return view('download', compact('file'));//compact file passe $file à la vue
	}

    public function download($id)// se lance en cas de click sur téléchargement
	{
		$file = Upload::find($id);
		// mail
		Mail::to($file->mail_to)->send(new ContactReturn($file));
		return Storage::disk('upload')->download($file->file_url, $file->real_name);
	}
}
