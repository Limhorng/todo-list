<?php

use App\Http\Controllers\Api\TaskController;
use Facade\FlareClient\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get("/get-tasks",[TaskController::class,"getTasks"]);
Route::get("/update-task-status-to-todo",[TaskController::class,"updateTaskStatusToToDo"]);
Route::get("/update-task-status-to-in-progress",[TaskController::class,"updateTaskStatusToInProgress"]);
Route::get("/update-task-status-to-done", [TaskController::class, "updateTaskStatusToDone"]);

Route::post("/create-task",[TaskController::class, "createTask"]);