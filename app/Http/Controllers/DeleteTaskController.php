<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DeleteTaskController extends Controller
{
    public function __invoke(Request $request, Task $task): RedirectResponse
    {
        $task->delete();

        $this->updateTaskOrdering();

        return back();
    }

    private function updateTaskOrdering(): void
    {
        /** @var Collection<Task> $tasks */
        $tasks = Task::orderBy('number')->get();

        foreach ($tasks as $index => $task) {
            $task->update([
                'number' => $index + 1,
            ]);
        }
    }
}
