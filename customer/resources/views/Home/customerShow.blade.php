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
			<td>GENDER</td>
			<td>CUSTOMER TYPE</td>
			<td>ADDRESS</td>
			<td>PICTURE</td>
		</tr>

		@for($i=0; $i < count($customers); $i++)
		<tr>
			<td>{{$customers[$i]['ID']}}</td>
			<td>{{$customers[$i]['CUSTOMERName']}}</td>
			<td>{{$customers[$i]['Name']}}</td>
			<td>{{$customers[$i]['ContactNo']}}</td>
			<td>{{$customers[$i]['Gender']}}</td>
			<td>{{$customers[$i]['CUSTOMERType']}}</td>
			<td>{{$customers[$i]['Address']}}</td>
			<td>{{$customers[$i]['Propic']}}</td>
		@endfor
	</table>

</body>
</html>