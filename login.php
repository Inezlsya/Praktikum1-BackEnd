<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta  http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>FORM LOGIN</title>
</head>
<body bgcolor ="grey" >
	<form action="proses.php" method="post" enctype="multipart/form-data" name="from1" id="from1">
	<fieldset>
		<legend><h3>Form Login</h3></legend>
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input name="username" type="text" id="username" size="50" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password" id="password" size="50" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="login" id="login" value="Login" /></td>
			</tr>
			<tr>
 				<td></td>
 				<td></td>
				<td>
					<input type="button" name="Reset" value="Batal" /></td>
			</tr>
		</table>
	</form>

</fieldset>
</body>
</html>

<style type="text/css">
	form {
		margin: 0 auto;
		width: 500px;
		padding: 1em;
		border: 2px solid #CCC;
		color: black;
		text-align: center;
		background-color: azure;
		}

		label {
			display: inline-block;
			width: 90px;
			text-align: right;
		}

		input,
		button {
			font: 1em sans-serif;
			width: 300px;
			box-sizing: border-box;
			border: 1px solid #999;
</style>
