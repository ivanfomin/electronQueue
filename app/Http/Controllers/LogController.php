<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LogController extends Controller
{
    public function logging($task_id)
    {
        DB::insert('insert into logs (task_id, status, created_at) values (?, ?, ?)', [$task_id, 1, now()]);
    }

    public function show()
    {
        $logs = DB::table('logs')->where('status', 1)->orderBy('created_at', 'desc')->get();

        return view('show')->with(['logs' => $logs]);
    }

    public function work()
    {

        DB::update('update logs set status = 2 where status = 1 order by created_at desc limit 1 ');


        return redirect('/');
    }
}
