@props([
    'tasks' => collect(),
])

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MLP To-Do</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')
    </head>
    <body class="container-md">
        <div class="py-3 mb-lg-4">
            <x-logo />
        </div>

        <div class="row gap-3">
            <div class="col-lg-4">
                <x-create-task-form />
            </div>
            <div class="col card">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Task</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr class="tr">
                                    <th scope="row">{{ $task->number }}</th>
                                    <td
                                        class="{{ $task->completed ? 'text-decoration-line-through' : '' }}"
                                    >{{ $task->name }}</td>
                                    <td class="d-flex justify-content-end gap-2">
                                        <x-check-task-off-form
                                            :task="$task"
                                        />
                                        <x-delete-task-form
                                            :task="$task"
                                        />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        @vite('resources/js/app.js')
    </body>
</html>
