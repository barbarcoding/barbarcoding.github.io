<?php
	if (isset($_POST['submit']) and isset($_POST['alas']) and isset($_POST['tinggi'])) {
		$alas = $_POST['alas'];
		$tinggi = $_POST['tinggi'];
		$pilih = $_POST['pilih_luas_atau_keliling'];
		if ($alas == "" and $tinggi == "") {
			$hasil_salah = "";
		}else{
			if ($pilih == "hitung_luas") {
				$hasil = 0.5 * $alas * $tinggi;
			}elseif ($pilih == "hitung_keliling") {
				$hasil = 3 * $alas;
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hitung Segitiga</title>
</head>
<body>
<form action="segitiga.php" method="post">
	<table  border="1" align="center">
		<tr>
			<td colspan="3"align="center"><img src="img/header.png" width="500" height="125"></td>
		</tr>
		<tr>
			<td colspan="3" align="center" bgcolor="lime"><font size="2"><a href="home.php">Home</a></font></td>
		</tr>
		<tr bgcolor="#f5f5da" align="center">
			<td>
				<br>
				<table>
					<tr>
						<td colspan="3" align="center"><h3>Segitiga</h3></td>
					</tr>
					<tr>
						<td>Alas</td>
						<td>:</td>
						<td><input type="number" name="alas"></td>
					</tr>
					<tr>
						<td>Tinggi</td>
						<td>:</td>
						<td><input type="number" name="tinggi"></td>
					</tr>
					<tr>
						<td>Pilih</td>
						<td>:</td>
						<td>
							<select name="pilih_luas_atau_keliling">
								<option value="hitung_luas">Hitung Luas</option>
								<option value="hitung_keliling">Hitung Keliling</option>
							</select>

						</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							<br>
							<input type="submit" name="submit" value="Hitung" width="100%" height="100%">
							<br>
							<br>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="center">HASIL HITUNG</td>
					</tr>
					<tr>
						<td colspan="3" align="center"><hr></td>
					</tr>
					<tr <?php 
							if(isset($_POST['submit'])){
								echo "";
							}else{ echo "hidden"; }?>>
						<td align="center" colspan="3">
							<?php
								if (isset($hasil_salah)){
									$h = "";
								} else { 
									$h = "hidden";
								}
							?>
							<font color="red"<?php echo $h; ?>>Silahkan Masukan Nilai Alas atau Tinggi*</font>
							<font color="blue"><h2><?php if(isset($hasil_salah)){ echo 0;
								}else{
									echo $hasil;} ?></h2></font>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</form>
</body>
</html>