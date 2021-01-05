<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
<h1>Welcome home {{$username}}</h1>
    <a href="{{route('home.profile')}}">Profile</a> |
	<a href="/empCreate">Create New User</a> |
	<a href="{{route('home.emplist')}}">View Employee List</a> |
	<a href="/logout">logout</a>

</body>
</html>