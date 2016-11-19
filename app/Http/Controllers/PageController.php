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
		//$office = Company::where('title', '=', 'businessHours')->get();
		
//		post
		$posts_home_main_con3 = Post::where('cat', '=', 'main_con3')->take(3)->orderBy('created_at', 'desc') ->get();
		
		
		$posts_hasvideo = Post::where('video', null)-> get();
//		if ($posts_hasvideo == 0){
//			$posts_hasvideo == 0
//			return $posts_hasvideo
//		}
		
		
		$posts_about = Post::where('page_name', '=', 'about')->take(3)->get();
		$posts_news = Post::where('page_name', '=', 'news')->take(3)->orderBy('created_at', 'desc')->get();
		$posts_uscc = Post::where('page_name', '=', 'uscc')->take(3)->orderBy('created_at', 'desc')->get();
		$posts_oc = Post::where('page_name', '=', 'oc')->take(6)->get();
		$posts_portfolio = Post::where('page_name', '=', 'portfolio')->take(3)->get();
		$posts_testimonials = Post::where('page_name', '=', 'testimonials')->take(1)->get();
		
		
		return view('layouts.home', [
			'page_id' => 'home', 
			'site_title' => 'CONSRTUCTION', 
			'posts' => $posts,
			'companys' => $companys,
			'companys_sns' => $companys_sns,
			'menu' => $menu,
			'aboutcompany' => $aboutcompany,
			'businesshours' => $businesshours,
			'posts_home_main_con3' => $posts_home_main_con3, 
			'posts_hasvideo' => $posts_hasvideo,
			'posts_about' => $posts_about, 
			'posts_news' => $posts_news, 
			'posts_uscc' => $posts_uscc,
			'posts_oc' => $posts_oc,
			'posts_portfolio' => $posts_portfolio,
			'posts_testimonials' => $posts_testimonials
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
