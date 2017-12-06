<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddFile extends Model
{
     protected $table = 'upload'[
        'name', 'slug',
    ];
}
