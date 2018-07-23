<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LogController extends Controller
{

    protected $table = 'logs';

    public function logging($task_id)
    {
        DB::insert('insert into ' . $this->table . ' (task_id, status, created_at) values (?, ?, ?)', [$task_id, 1, now()]);

        return redirect('/');
    }

    public function show()
    {
        $logs = DB::table($this->table)->where('status', 1)->orderBy('created_at', 'desc')->get();

        return view('show')->with(['logs' => $logs]);
    }

    public function work()
    {

        DB::table($this->table)->where('status', 1)->limit(1)->update(['status' => 2]);

        return redirect('/');
    }
}
