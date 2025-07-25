<?php
class PPLG3 {
    
    public $nama;
    public $umur;
    public $gender;
    public $agama;

    public function __construct($nama,$umur,$gender,$agama) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->gender = $gender;
        $this->agama = $agama;
    }

    public function profilSiswa() {
        echo "<h1>Profil Siswa XI PPLG 3 <br/>";
        echo "Nama : " . $this->nama ."<br/>"; 
        echo "Umur : ". $this->umur ."<br/>";
        echo "Gender : ". $this->gender ."<br/>"; 
        echo "Agama : ". $this->agama ."<br/>";

        }

    public function gender(): string {
        if ($this->gender == "L") {
            return "Laki-laki<br>";
        } else {
            return"perempuan<br>";
              }
    }
}

$azka = new PPLG3 ("Azka","16","L","Islam");


$kepin = new PPLG3 ("Kepin","16","L","Yahudi");


$kalnigga = new PPLG3 ("Kalnigga","17","P","Kristen");


$rusdi = new PPLG3 ("Rusdi","1000","P","Amba");


$zucky = new PPLG3 ("Zucky","500","L","Yahudi");

$semuasiswa = array($azka,$kepin,$kalnigga,$rusdi,$zucky);

foreach ($semuasiswa as $ss) {
    $ss->profilSiswa();
    $ss->gender();
}