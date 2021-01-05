<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit User</legend>
			<table border="1">
                <tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{$UserName}}"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="{{$Name}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{$Password}}"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="{{$Email}}"></td>
				</tr>
				<tr>
					<td>Contact Nunber</td>
					<td><input type="text" name="contno" value="{{$ContactNo}}"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="text" name="gender" value="{{$Gender}}"></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td><input type="text" name="type" value="{{$UserType}}"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address" value="{{$Address}}"></td>
				</tr>
				<tr>
					<td>Profile Picture</td>
					<td><input type="file" name="myimg" ></td>
				</tr>

				<tr>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>
</body>
</html>