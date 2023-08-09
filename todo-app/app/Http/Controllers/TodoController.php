<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
    	$todos = Todo::all();
    	return view('todos.index', compact('todos'));

    }

    public function create()
    {
    	return view('todos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:6|max:20',
            'details' => 'required'
        ]);

    	$todo = new Todo();
    	$todo->name = $request->name;
        $todo->details = $request->details;
    	$todo->completed = false;

    	$todo->save();
        session()->flash('success', 'Todo Created Successfully');
    	return redirect('/todos');
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show', compact('todo'));
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|min:6|max:20',
            'details' => 'required'
        ]);

        $todo = Todo::find($id);
        $todo->name = $request->name;
        $todo->details = $request->details;
        $todo->completed = false;

        $todo->save();
        session()->flash('success', 'Todo Update Successfully');
        return redirect('/todos');
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        session()->flash('success', 'Todo Delete Successfully');
        return redirect('/todos');
    }

    public function complete($id)
    {
        $todo = Todo::find($id);
        $todo->completed = true;

        $todo->save();
        session()->flash('success', 'Todo Completed Successfully');
        return redirect('/todos');
    }
}
