<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable = ['name',  'course_type', 'description','link',
'image'    ];    //
}
