<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MarkTaskCompletedController extends Controller
{
    public function __invoke(Request $request, Task $task): RedirectResponse
    {
        $task->update([
            'completed' => true,
        ]);

        return back();
    }
}
