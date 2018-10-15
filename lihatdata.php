<?php 
require_once("db.php");
?>


<html>
<table border="2">
<head >


	<form action="cari.php" method="post">
	<label>Cari :</label>
	<input type="text" name="nim">
	<input type="submit" name="cari" value="cari">
	</form>

	<th>Nama</th>
	<th>Nim</th>
	<th>Aksi</th>


</head>
<body>


<?php

	// SAATNYA MENAMPILKAN DATA YANG TELAH DIINPUTKAN KE DATABASE 

//$username = $_SESSION['username'];
$connect = new mysqli("localhost", "root", "", "webdas");
 $sql = "SELECT * FROM mahasiswa ";
 $result = mysqli_query($connect, $sql);
 $row = mysqli_num_rows($result);

 if(mysqli_num_rows($result) > 0){
 	
 	while ( $row = mysqli_fetch_assoc($result)) {

	$nim= $row['nim'];
 		echo "<tr>";
 		echo "<td>".$row['nama']."</td>";
 		echo "<td>".$row['nim']."</td>";
 	

 		echo "<td>"."<a href='delete.php?nim=$nim'>Delete</a> ";
 		echo "</tr>";
 	}
 } else {
 	echo "0 results";
 }
 // echo "<a href = form.php> Inputkan </a>";
 // echo "<br>";
//mysqli_close($connect);

?>

</body>
</table>
</html>
<a href = form.php> Inputkan </a>
<br>