<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use DB;

class MenuController extends Controller
{
    public function index(){
		$menus = Menu::all();
		$data['menus'] = Menu::all();
		
		return view('layouts.menuPanel', $data,[
			'page_id' => 'menupanel',
			'site_title' => 'CONSRTUCTION',
			'menus' => $menus
		]);
	}
	public function store(Request $request)
	{
		//$menus = Menu::all();
		
		$title = $request->input('title');
		$slug = $request->input('slug');
		// id => 갯수 파악해서 +1 만 하는 코드 넣어야함.. 
		
		if($request->input('status') == 'published') {
			$status = 'published';
		} else {
			$status = 'unpublished';
		}
		
		
		$menu = new Menu();
		$menu->title = $title;
		$menu->slug = $slug;
		$menu->status = $status;
		$menu->save();
		

		return back();
	}
}
