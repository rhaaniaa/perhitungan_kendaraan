<!DOCTYPE html>
<html>
<head>
	<title>Hasil Perhitungan</title>
</head>
<body>
	<?php
		$jarak = $_POST['jarak'];
		$kecepatan = $_POST['kecepatan'];
        $beban = $_POST['beban'];

		$waktu_tempuh = ($jarak / $kecepatan) * 60; 
		$konsumsi_bensin = ($jarak * ($beban / 1000));
		$harga_bensin = ($konsumsi_bensin * 10000);
	
            echo "<h2>"; 
            echo "<h2>Hasil Perhitungan</h2>";
            echo "<br>";
            echo "Kecepatan :", $kecepatan, "km/jam", "<br>";
            echo "Jarak yang ditempuh :", $jarak, "km", "<br>";
            echo "Beban Kendaraan :", $beban, "kg", "<br>";
            echo "Waktu yang ditempuh :", $waktu_tempuh, "menit", "<br>";
            echo "Konsumsi BBM :", $konsumsi_bensin, "liter", "<br>";
            echo "Harga Bensin :","Rp.", $harga_bensin,  "<br>";
    ?>        
</body>
</html>