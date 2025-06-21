<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Task

class ApiController extends Controller
{
    //
    public function login(Request $request)
    {
        $user_credentials= request(['email','password']);
        if( Auth::attempt(  $user_credentials))
        {
            return response()->json(['message'=>'Invalid login details']);
        }
        $user_id = Auth::
    }
    public function createTask(Request $request)
    {
        $task_validated     =$request->validate([
            'title' => ['required'],
            'description' => ['required'],
        ]);
        Task::create($task_validated);
    }
    public function getTask(Request $request)
    {
        $task_id    =   $request->task_id;
        $task       =   Task::find($task_id)->first();

        return response()->json(['status'=>'success','task'=> $task ]);


    }
    
}

