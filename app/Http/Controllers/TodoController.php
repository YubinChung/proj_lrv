<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

use DB;

class TodoController extends Controller
{
	public function index(){
		$todos = Todo::all();
		return view('todo.index', ['todos' => $todos]);
	}
	
	
    public function store(Request $request)
	{
		
		$title = $request->input('title');
		
		$todo = new Todo();
		$todo->title = $title;
		$todo->save();
		

		return back();
	}
	
	
	public function destroy($id)
	{
		
		$todo = Todo::find($id);
		$todo->delete();
		
		return back();
	}
	
	
	public function done($id)
	{
		
		$todo = Todo::find($id);
		
		if($todo->done ==1) {
			$todo->done = 0;
		} else{
			$todo->done = 1;
		}
		
		$todo->save();
		
		return back();
		
	}
}
