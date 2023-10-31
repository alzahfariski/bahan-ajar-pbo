<?php

// import data/person.php
require_once "data/person.php";
// buat object dari kelas person
$person1 = new person();
// tambahkan value nama di object
$person1->nama = "alzah";
// panggil function sayHelloNull dengan parameter
$person1->sayHelloNull("fariski");
// buat object dari kelas person
$person2 = new person();
// tambahkan value nama di object
$person2->nama = "Kic";
// panggil function sayHelloNull dengan parameter null
$person2->sayHelloNull(null);