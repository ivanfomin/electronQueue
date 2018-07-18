<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::select(['id', 'name', 'counter'])->get();

        return view('page')->with(['tasks' => $tasks]);
    }

    public function increment($id)
    {
        Task::where('id', $id)->increment('counter', 1);

        $log = new \App\Http\Controllers\LogController();

        $log->logging($id);

        return redirect('/');
    }

}
