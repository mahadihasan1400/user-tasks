<?php

namespace App\Http\Controllers;

use App\Category;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Response;

class TaskController extends Controller
{
    public function addTask()
    {
        $categories = Category::where('user_id', Auth::user()->id)
            ->where('publication_status',1)->get();

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
        $tasks = DB::table('tasks')
            ->join('categories', 'tasks.category_id', '=', 'categories.id')
            ->join('users', 'tasks.user_id', '=', 'users.id')
            ->select('tasks.*', 'categories.category_name', 'users.name')
            ->where('tasks.user_id', '=', Auth::user()->id)
            ->get();
        //return $tasks;
        return view('users.task.manage-task', [
            'tasks' => $tasks
        ]);
    }

    public function taskComplited($id)
    {
        //return $id;
        $task = Task::where('id', $id)->first();
        $task->status = 'Complite';
        $task->save();
        return redirect('manage-task')->with('message', 'Task complited !! well done my boy');
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('manage-task')->with('message', 'Task remove successfully');
    }

    public function viewTaskDetails($id)
    {
        $taskById = Db::table('tasks')
            ->join('categories', 'tasks.category_id', '=', 'categories.id')
            ->join('users', 'tasks.user_id', '=', 'users.id')
            ->select('tasks.*', 'categories.category_name', 'users.name')
            ->where('tasks.id', '=', $id)
            ->first();
         //return Response::json($taskById);

        return view('users.task.view-task-details', [
            'taskById' => $taskById]);
    }

    public function editTask($id)
    {
        $taskById = Task::where('id', $id)->first();
        $categories = Category::where('user_id', Auth::user()->id)
            ->where('publication_status',1)->get();
        return view('users.task.edit-task', [
            'taskById' => $taskById,
            'categories' => $categories
        ]);
    }

    public function updateTask(Request $request)
    {
        //return $request->all();
        $taskById = Task::where('id', $request->task_id)->first();
        if ($request->finishing_date) {
            $taskById->category_id = $request->category_id;
            $taskById->task_name = $request->task_name;
            $taskById->status = $request->status;
            $taskById->task_description = $request->task_description;
            $taskById->finishing_date = $request->finishing_date;
            $taskById->save();
        } else {
            $taskById->category_id = $request->category_id;
            $taskById->task_name = $request->task_name;
            $taskById->status = $request->status;
            $taskById->task_description = $request->task_description;
            $taskById->save();
        }
        //return redirect('/edit-task/'.$taskById->id)->with('message',"update successfully");
        return redirect('/manage-task')->with('message',"update successfully");
    }
}
