<h2>Menghitung Luas & Keliling Lingkaran</h2>

<p>Masukkan Jari Jari</p>
<form action="hitung-lingkaran.php" method="post"> 
	jari jari : <input type="text" name="jari2"></br> 
	<input type="submit" name="submit" value="hitung">
</form> 

<?php
if(isset($_POST['submit'])){
	$jari2 = $_POST['jari2'];
	$phi = 22/7;
	$luas_lingkaran = $phi*$jari2*$jari2;
	$keliling_lingkaran = $phi*($jari2+$jari2);
 
	echo "LUAS & KELILING LINGKARAN <br>"; 
	echo "$luas_lingkaran <br>"; 
	echo "$keliling_lingkaran <br>";
}
?>
