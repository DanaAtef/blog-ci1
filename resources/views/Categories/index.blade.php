@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="text-primary">Categories List</h3>
    <a href="{{ route('categories.create') }}" class="btn btn-success">+ Add Category</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-striped table-bordered shadow-sm">
    <thead class="table-primary">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th style="width: 200px;">Actions</th>
        </tr>
    </thead>
    <tbody>
    @forelse($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="3">No categories found.</td></tr>
    @endforelse
    </tbody>
</table>
@endsection


