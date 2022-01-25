<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){

        $tasks = Task::all();
        
        return view('tasks.index',['tasks'=>$tasks]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|max:50',
            'description' => 'required|max:255',
        ]);
        $title  = $request->title;
        $description = $request->description;
        Task::create(['title' => $title,
        'description' => $description,'user_id' => 3]);
        return back();
    }

    public function destroy (Task $task){
        $task->delete();
        return back();
    }
}
