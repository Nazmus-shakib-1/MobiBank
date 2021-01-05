<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<!-- <form method="post" enctype="multipart/form-data"> -->

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit User:</legend>
			<table border="1">
                <tr>
					<td>Username:</td>
					<td>"{{UserName}}"</td>
				</tr>
				<tr>
					<td>Name:</td>
					<td>"{{$Name}}"</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>"{{$Password}}"</td>
				</tr>
				<tr>
					<td>Email:</td>
					<td>"{{$Email}}"</td>
				</tr>
				<tr>
					<td>Contact Nunber:</td>
					<td>"{{$ContactNo}}"</td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>"{{$Gender}}"</td>
				</tr>
				<tr>
					<td>User Type:</td>
					<td>"{{$UserType}}"</td>
				</tr>
				<tr>
					<td>Address:</td>
					<td>"{{$Address}}"</td>
				</tr>
				<tr>
					<td>Profile Picture</td>
					<td><img src="{{asset('upload/'. $Propic)}}" width="100px" height="100px" ></td>
				</tr>

				
			</table>
			</fieldset>
		</form>
</body>
</html>