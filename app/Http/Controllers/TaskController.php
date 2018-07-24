<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->select(['id', 'name', 'counter'])->get();

        return view('page')->with(['tasks' => $tasks]);
    }

    public function increment($id)
    {
        DB::table('tasks')->where('id', $id)->increment('counter', 1);

        //return redirect()->action('LogController@logging', ['id' => $id]);

        return redirect()->route('logging', ['id' => $id]);
    }

}
