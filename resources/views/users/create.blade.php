<a href="/">Home</a>
<form action="/users/store" method="POST">
    @csrf
    <label for="name">User Name:</label>
    <input type="text" name="name" id="name">
    <!-- Add more form fields as needed -->

    <button type="submit">Create User</button>
</form>