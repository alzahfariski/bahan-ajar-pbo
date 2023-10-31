<?php

// import data/person.php
require_once "data/person.php";
// buat object baru dari kelas person
$person1 = new person();
// manipulasi properti nama, alamat, negara
$person1->nama = "ALzah";
// menampilkan hasil
echo "nama : {$person1->nama}";
