<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ShowTasksController extends Controller
{
    public function __invoke(Request $request): View
    {
        /** @var Collection<Task> $tasks */
        $tasks = Task::orderBy('number')->get();

        return view('tasks', [
            'tasks' => $tasks,
        ]);
    }
}
