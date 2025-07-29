<form action="{{ route('task.store') }}" method="POST">
    <div class="d-flex flex-column gap-3">
        <div class="form-group">
            <input type="text" name="name" placeholder="Insert task name" class="form-control" value="{{ old('name') }}" />
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" class="btn btn-primary" />

        @csrf
    </div>
</form>
