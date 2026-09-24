<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::orderBy('due_date')->get();  

        return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'due_date' => 'nullable|date',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'status' => 'Pending',
        ]);

        return redirect()
        ->route('tasks.index')
        ->with('success','Task added successfully!');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
              'title' => 'required|max:255',
            'description' => 'nullable',
            'due_date' => 'nullable|date',
            'status' => 'required|in:Pending,Completed',
        ]);

        $task->update($request->only([
            'title',
            'description',
            'due_date',
            'status',
        ]));

        return redirect()
        ->route('tasks.index')
        ->with('success','Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()
        ->route('tasks.index')
        ->with('success','Task deleted successfully!');
    }

    public function toggle(Task $task)
    {
        $task->update([
            'status' => $task->status === 'Completed'
            ? 'Pending'
            : 'Completed',
        ]);

        return redirect()->route('tasks.index');
    }
}
