<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Menu;
use App\Company;
use DB;

class MainController extends Controller
{
    public function index(){
		$data['menus'] = Menu::where('status', '=', 'published')->get();
		//dd($data);
		
		$data['services'] = Post::where('status', '=', 'published')->where('type', '=', 'service')->get();
		$data['constructor'] = Post::where('status', '=', 'published')->where('type', '=', 'constructor')->get();
		$data['what we do'] = Post::where('status', '=', 'published')->where('type', '=', 'what we do')->get();
		$data['news'] = Post::where('status', '=', 'published')->where('type', '=', 'news')->get();
		

	
		return view('layouts.home', $data);
		
	}
	
	
}
