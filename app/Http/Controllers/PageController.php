<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Menu;
use DB;

class PageController extends Controller
{
	public function index(){
		
//		$posts = Post::all();
//		$companys = Company::all();
//		
//		$companys_sns = Company::where('cat', '=', 'sns')->get();
//		$menu = Company::where('page_name', '=', 'menu')->get();
//		$aboutcompany = Company::where('title', '=', 'about')->get();
//		$businesshours = Company::where('title', '=', 'businessHours')->get();
//		
//		$posts_main = Post::where('post_id')
//
//	
//		return view('layouts.home', [
//			'page_id' => 'home', 
//			'site_title' => 'CONSRTUCTION', 
//			'posts' => $posts,
//			'companys' => $companys,
//			'companys_sns' => $companys_sns,
//			'menu' => $menu,
//			'aboutcompany' => $aboutcompany,
//			'businesshours' => $businesshours,
//			
//		]);
		
	}
	
    public function page($page_id){
			
		$page_uri = '';
		$page_uri .= 'layouts.' . $page_id;
		
		
		$data['menus'] = Menu::where('status', '=', 'published')->get();
		
		$data['abouts'] = Post::where('status', '=', 'published')-> where('type', '=', 'whatwedo')->orderBy('created_at','desc')->paginate(6);
		$data['works'] = Post::where('status', '=', 'published')-> where('type', '=', 'work')->paginate(9);
		
		//$companys_sns = Company::where('cat', '=', 'sns')->get();
		//$aboutcompany = Company::where('title', '=', 'about')->get();
		//$businesshours = Company::where('title', '=', 'businessHours')->get();
		
		return view($page_uri, $data, [
			'page_id' => $page_id, 
			'site_title' => 'CONSRTUCTION'
		]);
		
//		return view($page_uri, [
//			'page_id' => $page_id, 
//			'site_title' => 'CONSRTUCTION', 
//			'posts' => $posts,
//			'companys_sns' => $companys_sns,
//			'menu' => $menu,
//			'aboutcompany' => $aboutcompany,
//			'businesshours' => $businesshours
//		]);
		
	}
	
	public function show($id) {
		$post = Post::findOrFail($id);
		return view('post.show', compact('post'));
	}
}
