<?php
//OOP (Object Oriented Programmer)
//class: template/blueprint (denah rumah)
//object: isi, rumah

//self::
//this->
//_constructor

// Hak Akses:
//Public: untuk memberikan akses properti/method yang dapat diakses dari mana saja
//Private: untuk memberikan akses properti/method yang hanya dapat diakses dari dalam class itu sendiri
//Protected: untuk memberikan akses properti/method yang hanya dapat diakses dari dalam class sendiri atau turunan dari class (inheritanced class) tersebut.

//Class
Class NilaiSiswa
{
    public $nama;
    public $nilai;
    public $matakuliah;

    public function gethasil(){
        if ($this->nilai > 55) return "LULUS";
        else return "TIDAK LULUS";
    }
}
//objek
$ns1 = new NilaiSiswa();
$ns1->nama = "Angga";
$ns1->nilai = 90;
$ns1->matakuliah ="PWEB";

//cetak
echo "Nama Mahasiswa: $ns1->nama <br>";
echo "Nilai: $ns1->nilai <br>";
echo "Mata Kuliah: $ns1->matakuliah<br>";
echo "Status:". $ns1->gethasil();


?>