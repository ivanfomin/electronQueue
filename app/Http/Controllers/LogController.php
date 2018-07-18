<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;


class LogController extends Controller
{
     public function logging($task_id)
    {
        $log = new Log();
        $log->fill(['task_id' => $task_id, 'status' => 1]);
        $log->save();
    }

    public function show()
    {
        $logs = Log::select(['id', 'created_at', 'task_id', 'status'])->where('status', 1)->orderBy('created_at', 'desc')->get();

        return view('show')->with(['logs' => $logs]);
    }

    public function work()
    {


        $log = Log::where('status', 1)->first();

        $log->status = '1';

        $log->save();

        return redirect('/');


    }
}
