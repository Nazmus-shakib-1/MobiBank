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
			<td>GENDER</td>
			<td>USER TYPE</td>
			<td>ADDRESS</td>
			<td>PICTURE</td>
		</tr>

		@for($i=0; $i < count($employees); $i++)
		<tr>
			<td>{{$employees[$i]['ID']}}</td>
			<td>{{$employees[$i]['UserName']}}</td>
			<td>{{$employees[$i]['Name']}}</td>
			<td>{{$employees[$i]['ContactNo']}}</td>
			<td>{{$employees[$i]['Gender']}}</td>
			<td>{{$employees[$i]['UserType']}}</td>
			<td>{{$employees[$i]['Address']}}</td>
			<td>{{$employees[$i]['Propic']}}</td>
		@endfor
	</table>

</body>
</html>