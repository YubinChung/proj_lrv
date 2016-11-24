<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use DB;

class MenuController extends Controller
{
    public function index(){
		$data['menus'] = Menu::where('status','=','published')->get();
		$data['menuspanel'] = Menu::all();
		
		return view('layouts.menuPanel', $data,[
			'page_id' => 'menupanel',
			'site_title' => 'CONSRTUCTION',
			
		]);
	}
	public function store(Request $request)
	{
		
		$title = $request->input('title');
		$slug = $request->input('slug');
		
		if($request->input('status') == 'published') {
			$status = 'published';
		} else {
			$status = 'unpublished';
		}
		
//		if($request->id){ 
//			$menu = Menu::find($request->id);
//		} else{
//        $menu = new Menu();
//		$menu->title = $request->title;
//		$menu->slug = $request->slug;
//		$menu->status = $request->$status==null?'unpublished':'published';
//		$menu->id = count($this->menu)+1;
//		$menu->save();
//		}
		
		$menu = new Menu();
		$menu->title = $request->title;
		$menu->slug = $request->slug;
		$menu->status = $status;
		$menu->id = $menu->count()+1;
		$menu->save();
		
		return back();
		//return view('menu.form', $data);
	}
	public function destroy($id) {
		$data['menuspanel'] = menu::where('id',$id)->delete();
		$menu->save();
		//DB::table('menus')->where('id', '=', $id)->delete();
		//return view('menu.form', $data);
		return back();
	}
}
