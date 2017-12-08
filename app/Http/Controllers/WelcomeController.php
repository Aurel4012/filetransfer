<?php

namespace App\Http\Controllers;
use App\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function upload(Request $request){
    	$upload = new Upload($request->except('csrf_token'));
        $upload->real_name = $request->file_url->getClientOriginalName();
    	$fname = Storage::disk('upload')->put('', $request->file_url);
    	$upload->file_url = $fname;
    	$upload->save();
        // envoi du mail
        Mail::to($upload->mail_to)->send(new Contact($upload));
        // affichage lien
        return view('success', ['id'=>$upload->id_upload]);    	
    }
}
