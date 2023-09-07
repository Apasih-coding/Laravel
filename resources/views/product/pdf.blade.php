<table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Brand</th>
        <th scope="col">Stock</th>
        <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <th>{{ $product['id'] }}</th>
            <td>{{ $product['title'] }}</td>
            <td>{{ $product['category'] }}</td>
            <td>{{ $product['brand'] }}</td>
            <th>{{ $product['stock'] }}</th>
            <td>$.{{ $product['price'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>