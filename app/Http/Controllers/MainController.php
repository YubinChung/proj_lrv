<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Menu;
use DB;

class MainController extends Controller
{
    public function index(){
		
		
		$data['menus'] = Menu::where('status', '=', 'published')->get();
		//dd($data);
		
		$data['services'] = Post::where('status', '=', 'published')->where('type', '=', 'service')->orderBy('created_at', 'desc')->take(3)->get();
		$data['constructor'] = Post::where('status', '=', 'published')->where('type', '=', 'constructor')->orderBy('created_at', 'desc')->get();
		$data['whatwedo'] = Post::where('status', '=', 'published')->where('type', '=', 'whatwedo')->get();
		$data['works'] = Post::where('status', '=', 'published')->where('type', '=', 'work')->orderBy('created_at', 'desc')->take(3)->get();
		$data['news'] = Post::where('status', '=', 'published')->where('type', '=', 'news')->get();
		$data['ourclients'] = Post::where('status', '=', 'published')->where('type', '=', 'ourclients')->get();
		$data['testimonials'] = Post::where('status', '=', 'published')->where('type', '=', 'testimonials')->take(1)->get();
	
		return view('layouts.home', $data, [
			'page_id' => 'home',
			'site_title' => 'CONSRTUCTION'
		]);
		
	}
	
	
}
