<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskModel;

class TaskController extends Controller
{
    
    public function saveTask(Request $request){

        // This function will hanlde the action for saving the task
        //dd($request->all()); // This dd method is used for testing purposes

        // Creating a object of the TaskModel
        $task = new TaskModel;

        $task->task_name = $request->task_name;
        $task->task_description = $request->discription;

        // This will inster the data into the database.
        $task->save();

        // This will redirect the user to the home page.
        return redirect()->back(); 
    }
}
