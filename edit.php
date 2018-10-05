<?php
require_once("db.php");
$id         = $_GET['id'];
$siswa  	= mysqli_query($conn, "select * from siswa where id='$id'");
$row        = mysqli_fetch_array($siswa);

function active_radio_button($value,$input){
    
    $result =  $value==$input?'checked':'';
    return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['id'];?>" name="id">

	<table align="center">
		<form  action="update.php" method="POST" >
			<h2 align="center">FORM EDIT</h2>
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['id']; ?>" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nim']; ?>" name="nim"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" value="<?php echo $row['tgal_lahir']?>" name="tgal_lahir"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Simpan Perubahan">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>