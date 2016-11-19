<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $table = 'companys';

    protected $fillable = ['page_name', 'cat', 'title', 'body', 'desc', 'link', 'iconclass'];
}
