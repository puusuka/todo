<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\ClientRequest;
class TodoController extends Controller
{
 public function index()

    {   
    
        $tasks = Task::get();
        
      
        
      return view('index_todo'
        , ['tasks' => $tasks]);
    }  
 public function store(ClientRequest $request)
 {
  $tasks = new Task;
  $tasks->name  = $request->input('name');
  $tasks->save(); 
  return redirect()->route('todo.list');
 }
 public function update(ClientRequest $request,$id)
    
    {   $tasks = Task::find($id);
        $tasks->name = $request->input('name');
        $tasks->save();
        return redirect()->route('todo.list');
    }
 public function destroy(Request $request,$id )
    {
        $tasks = Task::find($id);
        $tasks->delete();
        return redirect()->route('todo.list');
    }
}
