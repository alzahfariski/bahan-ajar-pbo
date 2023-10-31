<?php

// membuat kelas person
class person{
    // membuat properti
    var string $nama;
    // gunakan nullable properti
    var ?string $alamat = null;
    // gunakan default value untuk properti 
    var string $negara = "Indonesia";
    // buat function sayHello
    function sayHello(string $name){
        echo "Hai $name" . PHP_EOL;
    }
    // buat function sayHello nullable dengan percabangan
    function sayHelloNull(?string $name){
        if(is_null($name)){
            echo "HI, {$this->nama}" . PHP_EOL;
        }else {
            echo "Hallo $name, saya {$this->nama}" . PHP_EOL;
        }
    }
}




    

    // buat const author

    // buat function info untuk self keyword

    // buat function constructor
    
    // buat function destructor
