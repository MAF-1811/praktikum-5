<?php

class dispenser{
    public $volume;
    public $hargasegelas;
    public $volumeGelas;
    public $namaMinuman;
    public const PHI = 3.14;
    public $r;
    public $tinggi;

    public function __construct($r, $tinggi){
        $this->jarijari = $r;
        $this->tinggi = $tinggi;
        
    }

    public function volumewadah(){
        return self::PHI * $this->jarijari * $this->jarijari * $this -> tinggi;
    }
}

class harga extends dispenser{

    public function __construct($hargasegelas){
        $this->hargaSegelas = $hargasegelas;
        echo "<br/> Jadi : ";
        echo "<br/>Harga satu gelas : " . $hargasegelas;
    }
    public function harga(){
        return $this -> hargaSegelas * 40 ;
    }
}
    echo "<br/> Diketahui : ";
    echo "<br/>  PHI : " . dispenser::PHI;
    $volumewadah = new dispenser(60, 80);
    $harga = new harga(1000);
    echo "<br/> Volume Dispenser : " . $volumewadah -> volumewadah() . " cm3";
    echo "<br/> Harga 40Gelas : " . $harga -> harga();

?>