<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $post;
	public function __construct(Post $post)
	{
	    //
	    $this->post= $post;
	}
}
