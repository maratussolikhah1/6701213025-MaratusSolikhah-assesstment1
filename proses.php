<?php
if (isset($_POST['submit'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];
    $hasil = 0;
    
    switch ($operator) {
        case '+':
            $hasil = $angka1 + $angka2;
            break;
        case '-':
            $hasil = $angka1 - $angka2;
            break;
        case '*':
            $hasil = $angka1 * $angka2;
            break;
        case '/':
            if ($angka2 == 0) {
                $hasil = "Tidak dapat melakukan pembagian dengan nol";
            } else {
                $hasil = $angka1 / $angka2;
            }
            break;
        default:
            $hasil = "Operator tidak dikenali";
    }

    echo "Hasil perhitungan: $angka1 $operator $angka2 = $hasil";
}
?>