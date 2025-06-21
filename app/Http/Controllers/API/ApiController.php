<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Res
use App\Models\Task

class ApiController extends Controller
{
    //
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

        return $response->json(['status'=>'success','task'=> $task ]);


    }
    
}

