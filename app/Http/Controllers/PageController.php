<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function home(){
		return view('layouts.home', ['page_id' => 'home', 'site_title' => 'CONSRTUCTION']);
		
	}
	
    public function page($page_id){
			
		$page_uri = '';
		$page_uri .= 'layouts.' . $page_id;
		
		return view($page_uri, ['page_id' => $page_id, 'site_title' => 'CONSRTUCTION']);
		
	}
}
