<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    public static $rules = [
//		'title' => 'required',
//		'body' => 'required'
//	];
	public function images(){
		return $this->hasOne('\App\Image');
	}
	//protected $fillable = ['page_name', 'cat', 'title', 'body', 'thumbnail', 'link', 'video', 'iconclass', 'comments_count'];
}
