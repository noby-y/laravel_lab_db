<a href="/">Home</a>
<form action="/users/assign" method="POST">
    @csrf
    <label for="userName">User Name:</label>
    <input type="text" name="userName" id="userName">
    @foreach ($users as $user)
    <li>
        {{ $user->name }}
    </li>
    @endforeach

    <label for="productName">Product Name:</label>
    <input type="text" name="productName" id="productName">
    @foreach ($products as $product)
    <li>
        {{ $product->name }}
        {{ $product->price }}
    </li>
    @endforeach
    <button type="submit">Assign</button>
</form>