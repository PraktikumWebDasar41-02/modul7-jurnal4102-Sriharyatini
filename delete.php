<?php
$id=$_GET['id'];
mysqli_query($view,"DELETE FROM input WHERE id=$id");
if (mysqli_affected_rows($view)>0) {
	echo "DATA TERHAPUS";
	header("Location: tabmhs.php");
}

?>