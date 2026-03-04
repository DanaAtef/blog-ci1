@extends('layouts.app')

@section('content')
<h3>Add Product</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
    </div>
@endif

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label>Price</label>
        <input type="number" name="price" step="0.01" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Category</label>
        <select name="category_id" class="form-select" required>
            <option disabled selected>Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-success">Save</button>
</form>
@endsection

