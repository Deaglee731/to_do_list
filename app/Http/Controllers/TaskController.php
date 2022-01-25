<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    public function index(){

        $tasks = Task::all();

        return view('tasks.index',['tasks'=>$tasks]);
    }

    public function store(TaskRequest $request){

        $title  = $request->title;
        $description = $request->description;
        $user_id = Auth::user()->id;
        
        Task::create([
        'title' => $title,
        'description' => $description,
        'user_id' => $user_id]);

        return back();  
    }

    public function destroy (Task $task){

        $task->delete();

        return back();
    }
}
