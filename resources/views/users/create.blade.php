@extends('layouts.base')

<form action="/users" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <!-- Add more form fields as needed -->

    {% if some_condition %}
    <p>Some content here</p>
    {% endif %}

    <button type="submit">Create User</button>
</form>
```