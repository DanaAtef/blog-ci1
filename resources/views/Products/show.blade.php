<h2>Product Details</h2>

<p><strong>Name:</strong> {{ $product->name }}</p>
<p><strong>Description:</strong> {{ $product->description }}</p>
<p><strong>Price:</strong> ${{ $product->price }}</p>
<p><strong>Category:</strong> {{ $product->category->name }}</p>

<a href="{{ route('products.index') }}">Back to List</a>
