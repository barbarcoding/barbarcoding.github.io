<?php

//membuat input username dengan nama dan password bpptik//
	if (isset($_POST['submit'])) {
		$username_akun = "ambar wijaya";
		$password_akun = "bpptik";
		$username = $_POST['username'];
		$password = $_POST['password'];

//jika username dan password benar, akan membuka file home.php//
		if ($username == $username_akun && $password == $password_akun) {
			header("Location: home.php");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Perhitungan</title>
</head>
<body>
<form action="index.php" method="post">
	<table  style="border-color: yellow; border-style: solid; border-width: 10 px; padding: 0;" align="center">

<!- Menampilkan gambar dari file img/header.png ->
		<tr>
			<td colspan="3"align="center"><img src="img/header.png" width="300" height="100"></td>
		</tr>
		<tr bgcolor="lime">
			<td colspan="3" align="center">LOGIN</td>
		</tr>
		<tr bgcolor="yellow">
			<td>Useraname</td>
			<td>:</td>
			<td><input type="text" name="username" placeholder="username"></td>
		</tr>
		<tr bgcolor="yellow">
			<td>Password</td>
			<td>:</td>
			<td><input type="Password" name="password" placeholder="password"></td>
		</tr>
		<tr bgcolor="yellow" colspan="3" 

		<?php
//jika username dan password salah//
		if(isset($username) == "" and isset($password) == ""){ echo "hidden"; }else{ echo ""; } ?>>
			<td colspan="3">
				<font color="red">
					Maaf Username dan Password tidak sesuai
				</font>
			</td>
		</tr>
		<tr bgcolor="yellow">
			<td colspan="3" align="center"><input type="submit" name="submit" value="Login"></td>
		</tr>
	</table>
</form>
</body>
</html>