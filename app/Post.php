<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    public static $rules = [
//		'title' => 'required',
//		'body' => 'required'
//	];
	
	protected $fillable = ['page_name', 'cat', 'title', 'body', 'thumbnail', 'link', 'video', 'iconclass', 'comments_count'];
}
