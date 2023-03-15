<?php 

// Buat fungsi
function hitungUmur($thn_lahir){
    $thn_sekarang = 2023;
    // hitung umur
    $umur = $thn_sekarang - $thn_lahir;
    // tampilin
    return $umur;
}

// Panggil fungsi
echo hitungUmur(2000);

?>