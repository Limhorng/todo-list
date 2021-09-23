<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getTasks(){

        return response()->json([
            'status' => 200,
            'tasks' => Task::get(),
        ]);
    }

    public function updateTaskStatustoToDo(Request $request, $taskId){

        return response()->json([
            'status' => 200,
            'message' => 'Task has been updated successfullly',
        ]);
    }
    
    public function updateTaskStatustoInProgress(Request $request, $taskId){
        return response()->json([
            'status' => 200,
            'message' => 'Task has been updated successfullly',
        ]);
    }
    
    public function updateTaskStatustoDone(Request $request, $taskId){
        return response()->json([
            'status' => 200,
            'message' => 'Task has been updated successfullly',
        ]);
    }
}
