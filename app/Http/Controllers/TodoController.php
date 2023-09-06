<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        $todo = Todo::all();
        return response()->json($todo);
        return view('todo.index', ['todo' => $todo]);
        
    }
    public function create(){
        return view('todo.create');
    }
    public function store(Request $request){

        $data = $request->validate([
            'Todo' => 'required',
            'completed' => 'required|boolean',
        ]);

        $newTodo = Todo::create($data);
        // response
        return redirect()->route('todo.index');
    }

    public function edit(Todo $todo){
        return view('todo.edit', ['todo' => $todo]);
    }

    public function update(Request $request, Todo $todo) {
        $request->validate([
            'completed' => 'required|boolean',
        ]);
    
        $completed = $request->input('completed');
    
        if ($completed !== $todo->completed) {
            $todo->update(['completed' => $completed]);
            return response()->json(['message' => 'Todo updated successfully']);
        } else {
            return response()->json(['message' => 'Completed field must be changed'], 422);
        }
    }
    
    
    public function destroy(Todo $todo){
        $todo->delete();
        return redirect()->route('todo.index')->with('success', 'Todo deleted successfully.');
    }
    
    public function clearAll()
    {
        dd('1111');
        try {
            Todo::truncate();
            dd('Todos cleared successfully 12345');
            return response()->json(['message' => 'All todos cleared successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to clear all todos'], 500);
        }
    }
    public function updateTodo(Request $request, Todo $todo)
    {
        $data = $request->validate([
            'Todo' => 'required',
            'completed' => 'required|boolean',
        ]);

        $todo->update($data);

        return response()->json($todo);
    }


    
    
    
}
