@extends('layouts.app')

@section('content')
<h3 class="text-warning">Edit Category</h3>

<form action="{{ route('categories.update', $category->id) }}" method="POST" class="p-3 shadow-sm bg-light rounded">
    @csrf @method('PUT')

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required>{{ $category->description }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
