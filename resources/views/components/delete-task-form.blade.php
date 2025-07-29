@props([
    'task' => null,
])

<form action="{{ route('task.delete', [
    'task' => $task,
]) }}" method="POST">
    <input type="submit" class="btn btn-danger btn-sm" value="&#x2715;">
    @csrf
</form>
