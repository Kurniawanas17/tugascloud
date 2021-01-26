<h2>Menghitung Luas & Keliling Lingkaran</h2>

<p>Masukkan Jari Jari</p>
<form action="index.php" method="post"> 
	jari jari : <input type="text" name="jari2"> 
	<br> 
	<br>  
	<br> 
	<input type="submit" name="submit" value="Hitung">
</form> 

<?php
if(isset($_POST['submit'])){
	$jari2 = $_POST['jari2'];
	$phi = 22/7;
	$luas_lingkaran = $phi*$jari2*$jari2;
	$keliling_lingkaran = $phi*($jari2+$jari2);
 
	echo "LUAS & KELILING LINGKARAN <br>"; 
	echo "<br>";
	echo "<br>";
	echo "LUAS LINGKARAN = $luas_lingkaran <br>"; 
	echo "KELILING LINGKARAN = $keliling_lingkaran <br>";
}
?>
