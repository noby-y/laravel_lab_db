<a href="/">Home</a>
<form action="/users/assign" method="POST">
    @csrf
    <label for="userName">User Name:</label>
    <input type="text" name="userName" id="userName">
    
    <label for="productName">Product Name:</label>
    <input type="text" name="productName" id="productName">

    <button type="submit">Assign</button>
</form>