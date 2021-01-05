<!DOCTYPE html>
<html>
<head>
	<title>User list page</title>
</head>
<body>

	<h3>All Employees</h3>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>CONTACT NUMBER</td>
		</tr>

		@for($i=0; $i < count($employees); $i++)
		<tr>
			<td>{{$employees[$i]['id']}}</td>
			<td>{{$employees[$i]['UserName']}}</td>
			<td>{{$employees[$i]['Name']}}</td>
			<td>{{$employees[$i]['ContactNo']}}</td>
			<td>
				<a href="{{route('home.empDetails', $employees[$i]['id'])}}">Details</a> |
				<a href="{{route('home.empEdit', $employees[$i]['id'])}}">Edit</a> |
				<a href="{{route('home.empDestroyView', $employees[$i]['id'])}}">Delete</a> 
			</td>
		</tr>
		@endfor
	</table>

</body>
</html>