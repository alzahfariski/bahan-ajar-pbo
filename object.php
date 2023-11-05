<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person = new Person("alzah","bengkulu");

// manipulasi properti nama, alamat, negara
$person->nama = "alzah";
$person->alamat = "bengkulu";
$person->negara = "Arab";

// menampilkan hasil
echo "nama = {$person->nama}" . PHP_EOL;
echo "alamat = {$person->alamat}" . PHP_EOL;
echo "negara = {$person->negara}" . PHP_EOL;
