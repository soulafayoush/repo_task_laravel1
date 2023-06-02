<h1>Add Product</h1>

<form method="POST" action="{{ route('product.store') }}">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="type">type:</label>
        <input type="text" name="type" id="type">
    </div>

    <button type="submit">Save</button>
</form>
