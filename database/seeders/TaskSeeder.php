<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var array $data */
        $data = config('tasks.default', []);

        foreach ($data as $number => $task) {
            $task['number'] = $number;
            Task::factory()->create($task);
        }
    }
}
