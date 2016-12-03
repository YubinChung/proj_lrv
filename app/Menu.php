<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public static $rules = [
		'title' => 'required|unique:menus|max:10',
		'slug' => 'required|unique:menus|max:12',
	];
}
