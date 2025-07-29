@props([
    'task' => null,
])

<form action="{{ route('task.mark', [
    'task' => $task,
]) }}" method="POST">
    <input type="submit" class="btn btn-success btn-sm" value="&check;" />
    @csrf
</form>
