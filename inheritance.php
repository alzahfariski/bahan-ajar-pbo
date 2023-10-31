<?php

// import data/person.php
require_once "data/manager.php";
// buat object new manager dan tambahakan value nama kemudian panggil function
$manager1 = new manager();
$manager1->nama = "alzah";
$manager1->sayHello("kic");
// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$ceo1 = new ceo();
$ceo1->nama = "fariski";
$ceo1->alamat = "bengkulu";
$ceo1->sayHello("far");