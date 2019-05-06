<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>	
	<form method="post" action="<?php echo base_url('c_login/login') ?>">
		<table align="center">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="user" placeholder="Username"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="pass" placeholder="Password"></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>