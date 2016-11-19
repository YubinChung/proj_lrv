<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Post;
use DB;
use Validator;



class PostController extends Controller
{
    public function index() 
	{
		$posts = Post::all();
		// $posts = Post::orderBy('created_at', 'desc')->paginate(5);
		return view('post.index', ['posts' => $posts]);
		
		
	}		
	public function create() {
		return view('post.create');
	}	
	public function store() {
		
//		$validator = Validator::make($data = Input::all(), Post::$rules); // post 에 있는 rules 을 쓰겠다
//		if ($validator->fails())
//		{
//			return redirect()->back()->withErrors($validator->errors())->withInput();
//		}
		
		
		
		$post = new Post;
		
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();
		
		return redirect()->route('post.index');
	}
	public function show($id) {
		$post = Post::findOrFail($id);
		return view('post.show', compact('post'));
	}
	public function edit($id) {
		$post = Post::find($id);
		return view('post.edit', compact('post'));
	}
	public function update($id) {
		$post = Post::findOrFail($id);
		
//		$validator = Validator::make($data = Input::all(), Post::$rules);
//		
//		if ($validator->fails())
//		{
//			return redirect()->back()->withErrors($validator->errors())->withInput();
//		}
		
		$post->update($data);
		return redirect()->route('post.index');
	}
	public function destroy($id) {
		$post = Post::find($id)->delete();
		//Post::destroy($id);
		return redirect()->route('post.index');
	}
}


