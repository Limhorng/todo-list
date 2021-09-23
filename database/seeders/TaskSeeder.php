<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $json = File::get("public/api/todos.json");
        $data = json_decode($json);
        foreach($data as $task){
            Task::create(array(
                'title' => $task->title,
                'description' => $task->description,
                'status' => $task->status,
            ));
        }
        
    }
}
