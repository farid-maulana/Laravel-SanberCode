<?php

include 'Animal.php';
include 'Ape.php';
include 'Frog.php';

$sheep = new Animal("shaun");

echo "Nama : $sheep->name <br>"; // "shaun"
echo "Jumlah kaki : $sheep->legs <br>"; // 2
echo "Berdarah dingin : $sheep->cold_blooded <br>"; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

$sungokong = new Ape("kera sakti");
echo "Nama : $sungokong->name <br>";
echo "Jumlah kaki : $sungokong->legs <br>";
echo "Berdarah dingin : $sungokong->cold_blooded <br>";
echo "Suara : "; 
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
echo "Nama : $kodok->name <br>";
echo "Jumlah kaki : " . $kodok->getLegs() . "<br>";
echo "Berdarah dingin : $kodok->cold_blooded <br>";
echo "Cara jalan : ";
$kodok->jump(); // "hop hop"

?>