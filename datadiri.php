<!DOCTYPE html>
<html>
<head>
	<title>Jurnal 6</title>
</head>
<body>
	<h4>Registrasi</h4>
	<form action="tabmhs.php" method="POST">
		NIM : <input type="text" name="nim"><br><br>
		Nama :<input type="text" name="nm"><br><br>
		Tanggal Lahir : <input type="date" name="tgllahir"><br>
		Jenis Kelamin : <br>
			<input type="Radio" name="jk" value="Perempuan">Perempuan<br>
			<input type="Radio" name="jk" value="Laki-Laki">Laki-Laki<br>
		<br>
		Program Studi : <select name="ps" required="">
			<option value="D3 SISTEM INFORMASI">D3 SISTEM INFORMASI</option>
			<option value="S1 INFORMATIKA">S1 INFORMATIKA</option>
			<option value="TEKNIK TELEKOMUNIKASI">TEKNIK TELEKOMUNIKASI</option>
			<option value="PERHOTELAN">PERHOTELAN</option>
			<option value="MBTI">MBTI</option>
			<option value="DESIGN INTERIOR">DESIGN INTERIOR</option>
		</select>
		<br><br>
		Fakultas : 
		<select name="fk" required="">
			<option value="FIT">FIT</option>
			<option value="FKB">FKB</option>
			<option value="FEB">FEB</option>
			<option value="INFORMATIKA">INFORMATIKA</option>
			<option value="FIF">FIF</option>
			<option value="FIK">FIK</option>

		</select>
		<br><br>
		Asal : <textarea name="alt"></textarea><br><br>
		Moto Hidup : <textarea name="mh"></textarea><br>
		<input type="submit" name="send" value="Kirim">
</form>
</body>
</html>