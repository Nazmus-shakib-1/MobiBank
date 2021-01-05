<!DOCTYPE html>
<html>
<head>
	<title>Customer list page</title>
</head>
<body>

	<h3>All Customers</h3>
	<a href="/Home">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>CUSTOMERNAME</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>CONTACT NUMBER</td>
		</tr>

		@for($i=0; $i < count($customers); $i++)
		<tr>
			<td>{{$customers[$i]['id']}}</td>
			<td>{{$customers[$i]['CustomerName']}}</td>
			<td>{{$customers[$i]['Name']}}</td>
			<td>{{$customers[$i]['ContactNo']}}</td>
			<td>
				<a href="{{route('Home.customerDetails', $customers[$i]['id'])}}">Details</a> |
				<a href="{{route('Home.customerEdit', $customers[$i]['id'])}}">Edit</a> |
				<a href="{{route('Home.customerDestroyView', $customers[$i]['id'])}}">Delete</a> 
			</td>
		</tr>
		@endfor
	</table>

</body>
</html>