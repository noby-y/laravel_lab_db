<a href="/">Home</a>
<table>
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>