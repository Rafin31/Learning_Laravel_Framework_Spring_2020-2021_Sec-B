<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<a href="/home"> Back</a> |
	<a href="/logout"> Logout </a> 

	<h2>Create New User</h2>

	<form method="post">
	<table>
		<tr>
			<td>ID</td>
			<td><input type="text" name="id" value="{{$user['id']}}"></td>
		</tr>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="uname" value="{{$user['name']}}"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" value="{{$user['email']}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Update"></td>
		</tr>
	</table>
	</form>
</body>
</html>