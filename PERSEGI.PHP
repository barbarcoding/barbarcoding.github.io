<?php
//rumus luas dan keliling persegi//
	if (isset($_POST['submit']) and isset($_POST['sisi'])) {
		$sisi = $_POST['sisi'];
		$pilih = $_POST['pilih_luas_atau_keliling'];
		if ($sisi == "") {
			$hasil_salah = "";
		}else{
			if ($pilih == "hitung_luas") {
				$hasil = $sisi * $sisi;
			}elseif ($pilih == "hitung_keliling") {
				$hasil = 4 * $sisi;
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hitung Persegi</title>
</head>
<body>
<form action="persegi.php" method="post">
	<table  border="1" align="center">
		<tr>
			<td colspan="3"align="center"><img src="img/header.png" width="500" height="125"></td>
		</tr>

<!- kembali ke menu utama ->
		<tr>
			<td colspan="3" align="center" bgcolor="lime"><font size="2"><a href="home.php">Home</a></font></td>
		</tr>

		<tr bgcolor="#f5f5da" align="center">
			<td>
				<br>
				<table>
					<tr>
						<td colspan="3" align="center"><h3>Persegi</h3></td>
					</tr>
					<tr>
						<td>Sisi</td>
						<td>:</td>
						<td><input type="number" name="sisi"></td>
					</tr>
					<tr>
						<td>Pilih</td>
						<td>:</td>
						<td>

<!- option memilih luas atau keliling ->
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
							<font color="red"<?php echo $h; ?>>Silahkan Masukan Nilai Sisi*</font>
							<font color="blue"><h2><?php if(isset($hasil_salah)){ echo 0; }else{ echo $hasil;} ?></h2></font>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</form>
</body>
</html>