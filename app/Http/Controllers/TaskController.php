<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\TaskCompletedNotification;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'required|file|mimes:pdf,docx,jpg,png|max:2048',
        ]);

        $filePath = $request->file('file')->store('tasks');

        $task = Task::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $filePath,
            'status' => 'completed',
        ]);

        $user = User::findOrFail($request->user_id);
        $user->notify(new TaskCompletedNotification($task));

        return response()->json(['message' => 'Tugas Berhasil dikirim.']);
    }

    public function viewAnswer($taskId)
    {
        $task = Task::with('answer')->findOrFail($taskId);
        return view('task.view-answer', ['task' => $task]);
    }
}
