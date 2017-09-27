<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
	{
		$tasks_data=Task::all();
	
		return view('tasks.index', compact('tasks_data'));
	} 
	
	public function show($id)
	{
		$tasks_data=Task::find($id);
	
		return view('tasks.show', compact('tasks_data'));
	}
}
