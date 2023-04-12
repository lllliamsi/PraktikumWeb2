<?php 

class persegiPanjang {
    // membuat property dan method
    public $panjang, $lebar;
    // contruct
    public function __construct($panjang, $lebar) {
        //akses property
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    // fungsi luas
    public function luas() {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    // fungsi keliling
    public function keliling() {
        $keliling = (2 * $this->panjang) + (2 * $this->lebar);
        return $keliling;
    }
} 

?>