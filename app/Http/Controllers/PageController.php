<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Company;
use DB;

class PageController extends Controller
{
	public function index(){
		
		$posts = Post::all();
		$companys = Company::all();
		
//		header, footer
		$companys_sns = Company::where('cat', '=', 'sns')->get();
		$menu = Company::where('page_name', '=', 'menu')->get();
		$aboutcompany = Company::where('title', '=', 'about')->get();
		$businesshours = Company::where('title', '=', 'businessHours')->get();
		
		$posts_main = Post::where('post_id')

	
		return view('layouts.home', [
			'page_id' => 'home', 
			'site_title' => 'CONSRTUCTION', 
			'posts' => $posts,
			'companys' => $companys,
			'companys_sns' => $companys_sns,
			'menu' => $menu,
			'aboutcompany' => $aboutcompany,
			'businesshours' => $businesshours,
			
		]);
		
	}
	
    public function page($page_id){
			
		$page_uri = '';
		$page_uri .= 'layouts.' . $page_id;
		
		if($page_id == 'portfolio'){
			$posts = Post::where('page_name', '=', 'portfolio')->paginate(9);
		} else {
			$posts = Post::where('page_name', '=', $page_id)->orderBy('created_at', 'desc')->paginate(6);
		}
		
		// header, footer
		
		$companys_sns = Company::where('cat', '=', 'sns')->get();
		$menu = Company::where('page_name', '=', 'menu')->get();
		$aboutcompany = Company::where('title', '=', 'about')->get();
		$businesshours = Company::where('title', '=', 'businessHours')->get();
		
		return view($page_uri, [
			'page_id' => $page_id, 
			'site_title' => 'CONSRTUCTION', 
			'posts' => $posts,
			'companys_sns' => $companys_sns,
			'menu' => $menu,
			'aboutcompany' => $aboutcompany,
			'businesshours' => $businesshours
		]);
		
	}
	
	public function show($id) {
		$post = Post::findOrFail($id);
		return view('post.show', compact('post'));
	}
}
