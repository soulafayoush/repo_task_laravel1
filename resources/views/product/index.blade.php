<h1>Product List</h1>

<a href="{{ route('product.create') }}" class="btn btn-primary">Add New Product</a>

@if(count($productes) > 0)
    <ul>
        @foreach($productes as $product)
            <li>{{ $product->name }} - {{ $product->price }}</li>
        @endforeach
    </ul>
@else
    <p>No products available.</p>
@endif
