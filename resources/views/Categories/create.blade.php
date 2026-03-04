@extends('layouts.app')

@section('content')
<h3 class="text-success">Add New Category</h3>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>@foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
    </div>
@endif

<form action="{{ route('categories.store') }}" method="POST" class="p-3 shadow-sm bg-light rounded">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required placeholder="Enter category name">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required placeholder="Enter description..."></textarea>
    </div>

    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection


