<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
<h1>Welcome Home {{$customername}}</h1>
    <a href="{{route('Home.profile')}}">Profile</a> |
	<a href="/customerCreate">Create New User</a> |
	<a href="{{route('Home.customerlist')}}">View Customer List</a> |
	<a href="/logout">logout</a>

</body>
</html>