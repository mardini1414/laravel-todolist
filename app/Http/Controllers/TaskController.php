<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $request)
    {

        $request->validate([
            'task' => 'required|max:25'
        ]);

        TodoList::create(['list' => $request->task]);
        return back();
    }

    public function delete($id)
    {
        TodoList::where('id', $id)->delete();
        return back();
    }

    public function edit($id)
    {
        $task = TodoList::where('id', $id)->first();
        return view('edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'edit' => 'required|max:25'
        ]);

        TodoList::where('id', $id)->update(['list' => $request->edit]);
        return redirect('/');
    }
}
