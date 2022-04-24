<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        // $tasks= DB::table('tasks')->get();
        $tasks = Task::all()->sortBy("name");
        return view('tasks',compact('tasks'));
    }

    public function show($id){
        $task = Task :: find($id);
        return view('show',compact('task'));
    }


     public function store( Request $request  ){

      $task = new Task();
      $task->name = $request->name;
      $task-> created_at = now();
      $task ->updated_at = now();
      $task -> save();

       return redirect() -> back();

    }

    public function delete($id){
        $task = Task :: find($id);
        $task -> delete();
        return redirect() -> back();
 
     }
    
     public function edit($id){


        $tasks = Task :: all()->sortBy("name");
        $task = Task :: find($id);

        return view('/tasks', compact('task', 'tasks'));
    }
    public function update(Request $request, $id){
    

        $task = Task :: where('id',$id)->update(['name' => $request->name]);
        return redirect('/');
    }

 }


  