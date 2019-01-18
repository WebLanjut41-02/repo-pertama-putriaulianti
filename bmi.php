</!DOCTYPE html>
<html>
<head>
	<title>Putri Aulianti Maulida Rumi - 6701174022</title>
</head>
<body>
	<h1>MENGHITUNG BERAT BADAN</h1>
	<form method="GET">
		<table>
			<tr>
				<td>Tinggi Badan</td>
				<td><input type="text" name="tb"></td>
				<td>cm</td>
			</tr>
			<tr>
				<td>Berat Badan</td>
				<td><input type="text" name="bb"></td>
				<td>kg</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jk" value="Laki">Laki-laki
					<input type="radio" name="jk" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Cek BMI!"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
if (isset($_GET['submit'])) {
	$tb = $_GET['tb']/100;
	$bb= $_GET['bb'];
	$jk = $_GET['jk'];
	$bmi = $bb / ($tb * $tb);

	echo "<h2> Hasil BMI Anda </h2>";
	echo "Tinggi Badan  : $tb m <br>";
	echo "Berat Badan   : $bb kg <br>";
	echo "Jenis Kelamin : $jk <br>";
	echo "BMI           : ".number_format($bmi);
	echo "<h4> Kesimpulan : </h4>";
	
	if($jk=='Perempuan'){
		if($bmi<18){
			echo "Kurus";
		} elseif ($bmi<25) {
			echo "Normal";
		} elseif ($bmi<27) {
			echo "Kegemukan";
		} elseif ($bmi>27) {
			echo "Obesitas";
		}
	}

	if($jk=='Laki'){
		if($bmi<17){
			echo "Kurus";
		} elseif ($bmi<23) {
			echo "Normal";
		} elseif ($bmi<27) {
			echo "Kegemukan";
		} elseif ($bmi>27) {
			echo "Obesitas";
		}
	}
}
?>