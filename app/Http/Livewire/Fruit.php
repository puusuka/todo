<?php

namespace App\Http\Livewire;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Task;

class Fruit extends Component
{   
    public $name;
      protected $rules = [
        'name' => 'max:6',
    ];

    // バリデーションメッセージ
    protected $messages = [
        'name.max' => '6文字以内でよろしく'
    ];
    public function render()
    {   
        
 
   
        return view('livewire.fruit');
    }
     public function submit(Request $request)
    {
    //  $tasks = new Task;
    //  $tasks->name  = $request->input('name');
    //  $tasks->save();
     Task::create([
            "name" => $this->name,
        ]); 
     return redirect()->route('todo.list');
     }
    public function updated($name)
    {
        $this->validateOnly($name);
    }
}
