<?php

namespace App\Http\Controllers;
use App\task_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
    {
       $task = new task_list;
        return view('create', compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function store(Request $request)
{
    $input = $request->all();

    $input['user_id'] = Auth::user()->id;

    task_list::create($input);

    \Session::flash('flash_message', 'Task successfully added!');

    return redirect()->back();
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $task = task_list::findorFail($id);
    return view ('edit', compact('task'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = task_list::findorFail($id);
        $task->update($request->all());
        return redirect()->action('HomeController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($task_id)
    {
        $id = task_list::findorFail($task_id);
        $id->delete();
        return redirect()->action('HomeController@index');


    }
}
