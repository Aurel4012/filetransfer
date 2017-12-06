<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
	protected $table = 'upload';
    protected $primaryKey = 'id_upload';
    protected $fillable = [
        'mail_from', 'mail_to', 'file_url','file_description'//champs modifiable
    ];
}
