<?php

namespace App\Http\Controllers;

use App\Category;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class TaskController extends Controller
{
    public function addTask()
    {
        $categories = Category::where('user_id', Auth::user()->id)->get();

        return view('users.task.add-task', ['categories' => $categories]);
    }

    public function newTask(Request $request)
    {
        $task = new Task();
        $task->user_id = Auth::user()->id;
        $task->category_id = $request->category_id;
        $task->task_name = $request->task_name;
        $task->task_description = $request->task_description;
        $task->finishing_date = $request->finishing_date;
        $task->save();

        return redirect('add-task')->with('message_task', 'Task Save Successfully');


    }


    public function manageTask()
    {
        $task = DB::table('tasks')
            ->join('categories','tasks.category_id', '=' , 'categories.id')
            ->join('users','tasks.user_id', '=' , 'users.id')
            ->select('tasks.*','categories.category_name','users.name')
            ->where('tasks.user_id', '=' , Auth::user()->id)
            ->get();
        return $task;



    }

}
