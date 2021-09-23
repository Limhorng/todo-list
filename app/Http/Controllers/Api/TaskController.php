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
            'tasks' => Task::orderBy("created_at","DESC")->get(),
        ]);
    }

    public function updateTaskStatusToToDo(Request $request){
        $taskId = $request->get("taskId");
        $task = Task::where('id', $taskId);
        $task->update([
            "status" => 'todo'
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Task has been updated successfullly',
        ]);
    }
    
    public function updateTaskStatusToInProgress(Request $request){
        $taskId = $request->get("taskId");
        $task = Task::where('id', $taskId);
        $task->update([
            "status" => 'in-progress'
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Task has been updated successfullly',
        ]);
    }
    
    public function updateTaskStatusToDone(Request $request){
        $taskId = $request->get("taskId");
        $task = Task::where('id', $taskId);
        $task->update([
            "status" => 'done'
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Task has been updated successfullly',
        ]);
    }

    public function createTask(Request $request){
        $title = $request->post('title');
        $description = $request->post('description');
        $status = $request->post('status');

        $task = Task::create([
            "title" => $title,
            "description" => $description,
            "status" => $status,
        ]);
        $task->save();

        return response()->json([
            "status" => 200,
            "task" => $task
        ]);
    }
}
