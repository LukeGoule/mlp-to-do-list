<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;

class StoreTaskController extends Controller
{
    public function __invoke(StoreTaskRequest $request): RedirectResponse
    {
        $data = [
            ...$request->validated(),
            'number' => $this->nextTaskNumber(),
        ];

        Task::factory()->create($data);

        return back();
    }

    protected function nextTaskNumber(): int
    {
        $latest = Task::orderBy('number', 'desc')->first()?->number ?? 0;

        return $latest + 1;
    }
}
