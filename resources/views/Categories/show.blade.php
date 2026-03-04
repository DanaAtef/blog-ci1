@extends('layouts.app')

@section('content')
<div class="card shadow-sm border-primary">
    <div class="card-header bg-primary text-white">
        <h4>Category Details</h4>
    </div>
    <div class="card-body">
        <h5 class="card-title text-success">{{ $category->name }}</h5>
        <p class="card-text">{{ $category->description }}</p>
        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection

