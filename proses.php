<!DOCTYPE html>
<html>
<head>
	<title>Hasil Perhitungan</title>
</head>
<body>
	<h1>Hasil Perhitungan</h1>
	<?php
	if(isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['operator'])){
	    $angka1 = $_POST['angka1'];
	    $angka2 = $_POST['angka2'];
	    $operator = $_POST['operator'];
	    
	    if($operator == '+'){
	        $hasil = $angka1 + $angka2;
	        echo "Hasil penjumlahan dari $angka1 + $angka2 = $hasil";
	    }else if($operator == '-'){
	        $hasil = $angka1 - $angka2;
	        echo "Hasil pengurangan dari $angka1 - $angka2 = $hasil";
	    }else if($operator == '*'){
	        $hasil = $angka1 * $angka2;
	        echo "Hasil perkalian dari $angka1 * $angka2 = $hasil";
	    }else if($operator == '/'){
	        if($angka2 == 0){
	            echo "Error: Pembagian dengan nol tidak dapat dilakukan!";
	        }else{
	            $hasil = $angka1 / $angka2;
	            echo "Hasil pembagian dari $angka1 / $angka2 = $hasil";
	        }
	    }else{
	        echo "Error: Operator tidak valid!";
	    }
	}
	?>
	<br><br>
	<a href="form.html">Kembali ke Formulir</a>
</body>
</html>