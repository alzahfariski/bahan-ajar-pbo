<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$alzah = new Person("alzah", "bengkulu");

// tambahkan value nama di object
$alzah->nama = "alzah";

// panggil function sayHelloNull dengan parameter
$alzah->sayHelloNull("Kic");

// buat object dari kelas person
$fariski = new Person("fariski", "jambi");

// tambahkan value nama di object
$fariski->nama = "fariski";

// panggil function sayHelloNull dengan parameter null
$fariski->sayHelloNull(null);
