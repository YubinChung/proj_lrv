<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use DB;
use Validator;

class MenuController extends Controller
{
    public function index(){
		$data['menus'] = Menu::where('status','=','published')->get();
		$data['menuspanel'] = Menu::all();
		
		return view('layouts.menuPanel', $data,[
			'page_id' => 'menupanel',
			'site_title' => 'CONSRTUCTION'
		]);
	}
	
	
	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), Menu::$rules);      
    	if($validator->fails()){
			return redirect('/menu')->withErrors($validator->errors())->withInput();
			
		}
		
		$data['menuspanel'] = Menu::all();
		
		if($request->id){ $menus = Menu::find($request->id);
    	
			// edit
			
		}else{
			$menu = new Menu();
			$menu->order = Menu::count();
		}
		
		$menu->title = $request->title;
		$menu->slug = $request->slug;
		$menu->status = $request->status == null ? 'unpublished' : 'published';
		$menu->save();
		
		$data['menus'] = Menu::where('status','=','published')->get();
		
		return back();
//		return view('layouts.menuPanel', $data, [
//			'page_id' => 'menupanel',
//			'site_title' => 'CONSRTUCTION'
//		]);
		
	}
	
//	public function edit($id) {
//		
//		$data['menuspanel'] = Menu::find($id);
//		return view('layouts.menuPanel', $data, compact('menu'));
//	}
	
	public function destroy(Request $request) {
		$id = $request->input('delete');
		$data['menuspanel'] = menu::where('id','=', $id)->delete();
		//$data->save();
		//DB::table('menus')->where('id', '=', $id)->delete();
		//return view('menu.form', $data);
		return back();
	}
}
