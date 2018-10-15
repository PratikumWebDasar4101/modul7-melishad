<?php 

require_once("db.php");


$nim=$_GET['nim'];
$sql ="DELETE from mahasiswa where nim =$nim ";
if (mysqli_query($connect, $sql)){

	echo "Data berhasil dihapus";
}else{
	echo "Error:".$sql."<br>". mysqli_error($db);
}
	


 ?>
 <br>
 <a href="form.php">silahkan isi data</a>