@extends('layouts.app')

@section('content')
<h3>Edit Product</h3>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf @method('PUT')

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
    </div>

    <div class="mb-3">
        <label>Price</label>
        <input type="number" name="price" value="{{ $product->price }}" step="0.01" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Category</label>
        <select name="category_id" class="form-select" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection

