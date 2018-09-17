<!DOCTYPE html>
<html>
<head>
	<title>6701174139</title>
</head>
<body>
	<form action="jurnal.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" value="upload" name="save">
	</form>
</body>
</html>

<?php
$name = $_FILES['file']['name'];
$temp = $_FILES['file']['tmp_name'];
$dir = "diupload/";
$diupload = move_uploaded_file($temp, $dir.$name);

if ($diupload) {
    echo "upload telah berhasil<br/>";
    echo "<img src='".$dir.$name."'>";
} else {
    echo "Upload Gagal!";
}

?>
