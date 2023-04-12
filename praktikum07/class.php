<?php 
// buat class bmiPasien
class bmiPasien {
    // tulis property dan method
    public $nama, $berat, $tinggi, $umur, $jk;
    // nikin construc
    public function __construct($nama, $berat, $tinggi, $umur, $jk) {
        // akses property
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;
    }

    // bikin method hasil bmi
    public function hasilBMI() {
        // tinggi dalam meter
        $tinggi_m = $this->tinggi / 100;
        // rumus bmi
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return $bmi;
    }

    // bikin method status
    public function statusBMI() {
        // simpen data bmi
        $bmi = $this->hasilBMI();
        // cek data jadi status
        if ($bmi < 18.5) {
            return "Kekurangan Berat Badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Normal Ideal";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan Berat Badan";
        } else {
            return "Kegemukan (Obesitas)";
        }
        
    }
}

// Buat Objek
// $pasien = new bmiPasien("Ismail", "70", "174", "22", "L");

// // menampilkan objek
// echo $pasien->nama . "<br>";
// echo $pasien->berat . "<br>";
// echo $pasien->hasilBMI() . "<br>";
// echo $pasien->statusBMI() . "<br>";



?>