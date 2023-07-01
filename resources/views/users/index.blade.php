<a href="/">Home</a>
<h1>User List</h1>
<ul>
    @foreach ($users as $user)
    <li>{{ $user->name }}</li>
    @endforeach
</ul>

