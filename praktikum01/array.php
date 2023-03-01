<?php 

// Buat Array
$animals = ["burung", "kucing", "nyamuk", "singa"];
echo $animals[1] . "<br>";

echo $animals[3] . "<br>";

// Menampilkan semua data dengan looping
foreach ($animals as $animal) {
    echo $animal . "<br>";
}



// Buat Array Asosiatof
$mahasiswa = ["nama"=>"Ismail", "jurusan"=>"SI", "semester"=>6];
echo $mahasiswa["jurusan"] . ",<br>";

// Menampilkan semua data
foreach ($mahasiswa as $key=>$value){
    echo "Key : " . $key . "Value : " . $value . "<br>";
}



// Buat Array multidimensi
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "OS"]
];

echo $dosen[0][0];

// 0


?>