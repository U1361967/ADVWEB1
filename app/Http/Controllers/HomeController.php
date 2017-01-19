<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $TList = \DB::table('TaskList')->get();
        
        return view('home', compact('TList', 'task_create'));
    }

    public function store(){
        $task_create = new task_list;
        return view('create', compact('task_create'));
    }
}
