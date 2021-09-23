<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TaskController::class, 'index'])->name("todo");
Route::get('/{path}', function ($path) {
    if (in_array($path, ["todo", "in-progress", "done"])) {
        return redirect("/#/" . $path);
    } else {
        abort(404);
    }
});
