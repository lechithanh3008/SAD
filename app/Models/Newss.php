<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newss extends Model
{
    protected $table = 'news';
    protected $fillable=[
    	'title','description',
    ];
}
