<a href="/">Home</a>
<form action="/products/store" method="POST">
    @csrf
    <label for="name">Product Name:</label>
    <input type="text" name="name" id="name">
    <label for="price">Price:</label>
    <input type="text" name="price" id="price">
    <!-- Add more form fields as needed -->

    <button type="submit">Create Product</button>
</form>