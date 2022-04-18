<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        // $tasks= DB::table('tasks')->get();
        $tasks = Task::all();
        return view('tasks',compact('tasks'));
    }

    public function show($id){
        $tasks= DB::table('tasks')->find($id);
        return view('show',compact('task'));
    }


     public function store(    Request $request  ){

    //  DB::table('tasks')->insert([
    //      'name'=> $request->name
    //  ]);

    $task = new Task();
    // $task.name = $request.name;
    // $task-> created _at();
    tasks.save();
    return redirect()->back();
    }

    public function destroy(){
        // $tasks= DB::table('tasks')->get();
        $Task ::fine($id)->delete() ;
        $task = Task::find($id);
        $task->delete();
        return view('tasks',compact('tasks'));
    }
    public function showDate($id){
        
        $task = Task::find($id);
       
        return view('tasks',compact('tasks'));
    }
    public function update(Request $req){
    //    return $req->input();
       $task = Task::find($req->id);
       $task->save();
     return redirct('tasks');  
    }

 }


  