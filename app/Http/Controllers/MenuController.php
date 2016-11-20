<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function index(){
		$data['menus'] = Menu::where('status', '=', 'published')->get();
		return view('layouts.menuPanel', $data);
	}
}
